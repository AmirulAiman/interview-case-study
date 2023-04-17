<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartService{

    /**
     * Create or update cart object in session
     *
     * @param Product $product
     * @return void
     */
    public function addToCart(Product $product)
    {
        $cart = session()->get("cart",[]);

        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->base_price,
                'quantity' => 1,
                'img_name' => $product->img_name
            ];
        }
        session()->put("cart", $cart);
        notify()->success("Item added to cart.");
    }

    /**
     * Clear cart from session
     *
     * @return void
     */
    public function clearCartSession()
    {
        session()->forget("cart");
    }
    
    /**
     * Remove product from cart session
     * @param Product $product
     */
    public function removeProductFromCart(Product $product)
    {
        $cart = session()->get('cart',[]);
        if(isset($cart[$product->id])){
            unset($cart[$product->id]);
        }
        session()->put("cart",$cart);
    }

    /**
     * Process and save the cart detail
     *
     * @param array $cart
     * @return Cart $newCart
     */
    public function processCheckout(array $cart)
    {
        $user = Auth::user();
        $newCart = $user->carts()->create([
            'details' => json_encode($cart),
            'total_price' => $this->calcCartTotalPrice($cart),
        ]);

        $newCart->items()->createMany($cart);
        session()->forget("cart");
        return $newCart;
    }

    /**
     * calculate total price from cart
     *
     * @param array $cart
     * @return float $total
     */
    public function calcCartTotalPrice(array $cart){
        $total = 0;

        foreach($cart as $id => $item){
            $total += ($item['quantity'] * $item['price']);
        }
        return $total;
    }
}