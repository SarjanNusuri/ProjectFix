<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function showLogin()
    {
        return view('admin.login');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function produk()
    {
        return view('admin.produk');
    }

    public function createproduk()
    {
        return view('admin.createproduk');
    }
}
