<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function Products() {
        $categories = Category::all();

        foreach($categories as $category) {
            $category->products = Product::where("category_id", $category->id)
            ->orderBy('id')
            ->get();
        }

        return view('product.products',
        [
            'categories' => $categories,
        ]);
    }

    public function Product($id) {

        // tries to fetch the category
        $product = Product::findOrFail($id);

        // gets all the products linked to the category
        $similar_products = Product::where('category_id', $product->category_id)
        ->where("id", "!=", $product->id)
        ->orderBy('id')
        ->get();

        return view('product.product',
        [
            'product' => $product,
            'similar_products' => $similar_products
        ]);
    }
}
