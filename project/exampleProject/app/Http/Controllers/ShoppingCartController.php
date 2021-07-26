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

        $data = ShoppingCart::where('session_id', $session_id)->limit(1)->get()[0];
        if(empty($data)) {
            $data = $this->create();
        }

        $items = $data->shoppingCartItems()->get();
        foreach($items as $item) {
            $product = Product::where('id', $item->product_id)->limit(1)->get()[0];
            $item->name = $product->product_name;
            $item->description = $product->product_description;
            $item->price = $product->price;
        }
        
        return view('shoppingcart.shoppingcart', [
            'shoppingCart' => $data,
            'items' => $items 
        ]);
    }  
   
    public function create() {  
        try {
            $session_id = Session::getId();

            $shoppingCart = new ShoppingCart;

            $shoppingCart->session_id = Session::getId();
    
            $shoppingCart->save();
            return ShoppingCart::where("session_id", $session_id)->get();
        } catch (Throwable $e) {
            return [];
        }
    }  
    
    public function store(Request $request) {  
        $session_id = Session::getId();
        //Create and use a validator here in future to check input 


        // Create a check here to see if it exsists
        $shoppingCart = ShoppingCart::where("session_id", $session_id)->get()[0];

        $shoppingCartItem = new ShoppingCartItem;

        $shoppingCartItem->shopping_cart_id = $shoppingCart->id;
        $shoppingCartItem->product_id = $request->product_id;
        $shoppingCartItem->amount = $request->amount;
        $shoppingCartItem->save();

        return $shoppingCartItem;
    }  
   
    public function show($id) {  
        try {
            // Validate the value...
        } catch (Throwable $e) {
            report($e);
    
            return false;
        }
        return view('shoppingcart.shoppingcart', []);
    }  
    

    public function edit($id) {  
        try {
            
        } catch (Throwable $e) {
            report($e);
    
            return false;
        }
    }  
   
    public function update(Request $request, $id)  {  
        try {
            // Validate the value...
        } catch (Throwable $e) {
            report($e);
    
            return false;
        }
    }  
   
    public function destroy($id) {  
        try {
            // Validate the value...
        } catch (Throwable $e) {
            report($e);
    
            return false;
        }
    }  
}
