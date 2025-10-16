<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $about = Product::all()->count();
        $terjual = Order::all()->count();
        return view('user.index',compact('products','terjual','about'));
    }

    public function detailproduk(Product $product)
    {
       return view('user.detailProduk',compact('product'));
    }
}
