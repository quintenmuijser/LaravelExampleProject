<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;


class CategoryController extends Controller
{
    public function Categories() {
        return view('category.categories', ['categories' => Category::findAll()]);
    }

    public function Category($id) {
        return view('category.category', ['category' => Category::findOrFail($id)]);
    }
}
