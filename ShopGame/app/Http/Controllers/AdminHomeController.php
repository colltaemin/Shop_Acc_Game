<?php

namespace App\Http\Controllers;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
