<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('user.index',compact('product'));
    }

    public function detailproduk()
    {
        return view('user.detailProduk');
    }
}
