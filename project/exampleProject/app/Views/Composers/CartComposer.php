<?php

namespace App\Views\Composers;

use Illuminate\View\View;
use App\Models\ShoppingCart;
use App\Models\ShoppingCartItem;
use App\Models\Product;
use Session;

class CartComposer
{
    public function compose(View $view)
    {
        $session_id = Session::getId();

        $cart = ShoppingCart::where('session_id', $session_id)->get();
        
        if($cart->isEmpty()) {
            $cart = $this->create()[0];
        }
        else {
            $cart = $cart[0];
        }

        $items = $cart->shoppingCartItems()->get();
        foreach($items as $item) {
            $product = Product::where('id', $item->product_id)->limit(1)->get()[0];
            $item->name = $product->product_name;
            $item->description = $product->product_description;
            $item->price = $product->price;
        }
        $cart->items = $items;

        $view->with('cart', $cart);
    }

    public function create() {  
        try {
            $session_id = Session::getId();

            $shoppingCart = new ShoppingCart;

            $shoppingCart->session_id = Session::getId();
    
            $shoppingCart->save();
            return $shoppingCart;
        } catch (Throwable $e) {
            return "error";
        }
    }  
}