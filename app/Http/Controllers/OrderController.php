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
        $pesan = "Halo, saya ingin memesan:\n"
           . "Produk: " . $product->name . "\n"
           . "Jumlah: " . $jumlah . "\n"
           . "Total Harga: Rp " . number_format($totalPrice,0,',','.') . "\n";

    // Nomor tujuan WhatsApp (tanpa +, gunakan kode negara)
    $no_wa = "6289531823390";

        return redirect()->away("https://wa.me/$no_wa?text=" . urlencode($pesan));
    }
}
