<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $products = Product::all();

        return view('home.index', ['category' => $category, 'products' => $products]);
    }

    public function category()
    {
    }
}
