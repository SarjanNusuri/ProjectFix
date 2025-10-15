<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $about = Product::all()->count();
        return view('user.index',compact('product','about'));
    }

    public function detailproduk($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        return view('user.detailProduk',compact('product'));
    }
}
