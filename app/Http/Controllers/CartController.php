<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Services\CartService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $items = [];
        $cart = session()->get('cart',[]);
        foreach($cart as $id => $item){
            array_push($items, $id);
        }
        $products = Product::whereIn("id",$items)->get();
        $total = $this->cartService->calcCartTotalPrice($cart);

        return view('carts.index', [
            'cart' => $cart,
            'products' => $products,
            "total" => $total
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            Log::channel("custom")->info("Adding items to cart");
            if(!auth()->check()){
                notify()->error("Please login first");
                return redirect(route('login'));
            } else {
                $product = Product::findOr($request->product_id, function() {
                    //If not found/not exist.
                    Log::channel("custom")->alert("Add failed, product not exist");
                    notify()->error("Product not exist");
                    return redirect()->back();
                });
                $this->cartService->addToCart($product);
                Log::channel("custom")->info("Add to cart successfully.");
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Log::channel("custom")->errro("Failed add to cart");
            Log::channel("custom")->errro($th->getMessage());
            notify()->error("Failed add to cart");
            return redirect()->back();
        }
    }

    public function checkout(Request $request){
        try {
            Log::channel("custom")->info("User checkout items");
            $cart = session()->get("cart",[]);
            if(!auth()->check()){
                notify()->error("Please login first.","Checkout Failed");
                return redirect("login");
            }
            if(!isset($cart)){
                Log::channel("custom")->alert("Checkout failed, cart empty.");
                notify()->error("Cart empty, checkout failed!","Checkout Failed.");
                return redirect()->back();
            }
            $newCart = $this->cartService->processCheckout($cart);
            Log::channel("custom")->info("Cart checked out successfully");
            notify()->success("Succesfull checkout.","Checkout Success!");
            return redirect(route("cart.history"));
        } catch (\Throwable $th) {
            Log::channel("custom")->error("Cart checked out failed");
            Log::channel("custom")->error($th->getMessage());
            notify()->error("Failed to checkout.", "Checkout Failed!");
            return redirect()->back();
        }
    }

    public function clear(): RedirectResponse
    {
        try{
            $this->cartService->clearCartSession();
            Log::channel("custom")->info(Auth::user()->email . " clear cart");
            return redirect()->back();
        } catch (\Throwable $th) {
            Log::channel("custom")->error("Failed to cler cart.");
            Log::channel("custom")->error($th->getMessage());
            notify()->error("Failed to clear cart.");
            return redirect()->back();
        }
    }

    public function remove(Product $product): RedirectResponse
    {
        Log::channel("custom")->info(Auth::user()->email. " remove ". $product->id. " from cart");
        $this->cartService->removeProductFromCart($product);
        return redirect()->back();
    }
    
    public function history($filter = "pending")
    {
        $carts = Auth::user()->carts()->latest()->get();
        return view('carts.show',[
            'carts' => $carts
        ]);
    }
}
