<?php

namespace App\Http\Controllers;
use \App\Models\Order;
use \App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $request->validate([
           
            'quantity' => 'required|integer|min:1',
        ]);
        $jumlah = $request->quantity;
        $totalPrice = $product->price * $jumlah;

        Order::create([
            'product_id' => $product->id,
            'jumlah' => $jumlah,
            'total_harga' => $totalPrice,
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil dibuat!');
    }
}
