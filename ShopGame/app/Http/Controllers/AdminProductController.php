<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->orderBy('id', 'desc')->paginate(8);

        return view('admin.products.index', compact('products'));
    }
}
