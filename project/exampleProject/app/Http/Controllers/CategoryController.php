<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Category;
use App\Product;


class CategoryController extends Controller
{
    public function categories() {
        return view('category.categories', ['categories' => Category::all()]);
    }

    public function category($id) {

        // tries to fetch the category
        $category = Category::findOrFail($id);

        // gets all the products linked to the category
        $products = Product::where('category_id', $category->id)
        ->orderBy('id')
        ->get();

        return view('category.category',
        [
            'category' => $category,
            'products' => $products
        ]);
    }
}
