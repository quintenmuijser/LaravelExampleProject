<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function Products() {
        return view('product.products', ['products' => Product::findAll()]);
    }

    public function Product($id) {
        return view('product.product', ['product' => Product::findOrFail($id)]);
    }
}
