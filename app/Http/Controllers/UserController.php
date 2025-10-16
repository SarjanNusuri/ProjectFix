<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $about = Product::all()->count();
        return view('user.index',compact('products','about'));
    }

    public function detailproduk(Product $product)
    {
       return view('user.detailProduk',compact('product'));
    }
}
