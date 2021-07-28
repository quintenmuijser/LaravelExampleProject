<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use App\Models\ShoppingCartItem;
use App\Models\Product;
use Session;

class ShoppingCartController extends Controller
{
    public function index(Request $request) {  
        $session_id = Session::getId();

        $cart = ShoppingCart::where('session_id', $session_id)->limit(1)->get();
        if(empty($cart[0])) {
            $cart = $this->create();
        }

        $items = $cart[0]->shoppingCartItems()->get();
        foreach($items as $item) {
            $product = Product::where('id', $item->product_id)->limit(1)->get()[0];
            $item->name = $product->product_name;
            $item->description = $product->product_description;
            $item->price = $product->price;
        }
        
        return view('shoppingcart.shoppingcart', [
            'shoppingCart' => $cart,
            'items' => $items 
        ]);
    }  
   
    public function create() {  
        try {
            $session_id = Session::getId();

            $shoppingCart = new ShoppingCart;

            $shoppingCart->session_id = Session::getId();
    
            $shoppingCart->save();
            return ShoppingCart::where('session_id', $session_id)->get();
        } catch (Throwable $e) {
            return [];
        }
    }  
    
    public function store(Request $request) {  
        $session_id = Session::getId();
        //Create and use a validator here in future to check input 


        // Create a check here to see if shopping cart exsists
        $shoppingCart = ShoppingCart::where("session_id", $session_id)->get()[0];


        // check if we have to store or update the cart

        if ($shoppingCart->shoppingCartItems()->where("product_id", $request->product_id)->get()->isEmpty()) {
            $shoppingCartItem = new ShoppingCartItem;

            $shoppingCartItem->shopping_cart_id = $shoppingCart->id;
            $shoppingCartItem->product_id = $request->product_id;
            $shoppingCartItem->amount = $request->amount;
            $shoppingCartItem->save();
        }
        else {
            $shoppingCartItem = $shoppingCart->shoppingCartItems()->where("product_id", $request->product_id)->get()[0];
            $shoppingCartItem->amount = ($shoppingCartItem->amount + $request->amount);
            $shoppingCartItem->update();
        }

        // possible in future to redirect with a notification aswell
        return back();
    }

    public function edit($id) {  
        $shoppingCart = ShoppingCart::where('session_id', $session_id)->get()[0];
        $shoppingCart->shoppingCartItems()->where('product_id', $id)->get()[0];
        dd($request);
        // possible in future to redirect with a notification aswell
        return back();
    }  
   
    public function update(Request $request, $id)  {  
        $session_id = Session::getId();

        $shoppingCart = ShoppingCart::where('session_id', $session_id)->get()[0];
        $item = $shoppingCart->shoppingCartItems()->where('product_id', $id)->get()[0];
        $item->amount = $request->amount;
        $item->update();
        // possible in future to redirect with a notification aswell
        return back();
    }  
   
    public function destroy($id) {  
        $session_id = Session::getId();

        // Create a check here to see if shopping cart exsists
        $shoppingCart = ShoppingCart::where('session_id', $session_id)->get()[0];
        $shoppingCart->shoppingCartItems()->where('product_id', $id)->get()[0]->delete();

        // possible in future to redirect with a notification aswell
        return back();
    }  
}
