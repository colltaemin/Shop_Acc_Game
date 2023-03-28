<?php

namespace App\Http\Controllers;

class AdminServiceController extends Controller
{
    public function index()
    {
        return view('admin.services.index');
    }
}
