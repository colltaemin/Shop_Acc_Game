<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Request;

class ProductController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $products = Product::all();

        return view('products.index', ['category' => $category, 'products' => $products]);
    }

    public function show(Request $request)
    {
        $category_detail = Category::where('id', request()->id)->first();

        return view('products.accDetails', ['category_detail' => $category_detail]);
    }
}
