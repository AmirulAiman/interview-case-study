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
            if(!auth()->check()){
                notify()->error("Please login first");
                return redirect(route('login'));
            } else {
                $product = Product::findOr($request->product_id, function() {
                    //If not found/not exist.
                    notify()->error("Product not exist");
                    return redirect()->back();
                });
                $this->cartService->addToCart($product);
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            notify()->error("Failed add to cart");
            notify()->error($th->getMessage());
            return redirect()->back();
        }
    }

    public function checkout(Request $request){
        try {
            $cart = session()->get("cart",[]);
            if(!auth()->check()){
                notify()->error("Please login first.","Checkout Failed");
                return redirect("login");
            }
            if(!isset($cart)){
                notify()->error("Cart empty, checkout failed!","Checkout Failed.");
                return redirect()->back();
            }
            $newCart = $this->cartService->processCheckout($cart);
            notify()->success("Succesfull checkout.","Checkout Success!");
            return redirect(route("cart.history"));
        } catch (\Throwable $th) {
            notify()->error("Failed to checkout.", "Checkout Failed!");
            notify()->error($th->getMessage());
            return redirect()->back();
        }
    }

    public function clear(): RedirectResponse
    {
        try{
            $this->cartService->clearCartSession();
            return redirect()->back();
        } catch (\Throwable $th) {
            notify()->error("Failed to clear cart.");
            notify()->error($th->getMessage());
            return redirect()->back();
        }
    }

    public function remove(Product $product): RedirectResponse
    {
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
