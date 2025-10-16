<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Order;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login berhasil
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard'); // ganti sesuai rute dashboard kamu
        }
        else{
            return redirect()->back()->with('error','email atau password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function index()
    {
        $totaljual = Order::sum('total_harga');
        $produkterjual = Order::all()->count();
        $order = Order::all();
        $id=1;
        $product=Order::find($id);
        
        $productName=Order::with('product')->get();
        return view('admin.index',compact('produkterjual','order','productName','totaljual','id'));
    }



    public function produk()
    {
        $no=1 ;
        $produk = Product::all();
        return view('admin.produk',compact('produk','no'));
    }


    public function createproduk()
    {
        
    return view('admin.createproduk');
}

public function store(Request $request){
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'stok' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $imagePath = $request->file('image')->store('produk', 'public');

    Product::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'stock' => $request->stok,
        'image' => $imagePath,
    ]);

    return redirect()->route('admin.produk')->with('success', 'Produk berhasil ditambahkan!');
}
        

public function edit(Product $product)
{
    return view('admin.updateproduk', compact('product'));
}
public function destroy(Product $product)
{
    if ($product->image) {
        Storage::delete('public/' . $product->image);
    }

    // Hapus data produk
    $product->delete();
    return redirect()->route('admin.produk')->with('success','data berhasil dihapus');
}
public function update(Request $request, Product $product)
{
    $validated = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'stock' => 'required',
        'image' => 'image|mimes:jpeg,jpg,png|max:2048',
    ]);

    if($request->hasFile('image')){
        // Hapus gambar lama jika ada
        if($product->image){
            Storage::delete('public/' . $product->gambar);
        }

        // Simpan gambar baru
        $path = $request->file('image')->store('produk', 'public');
        $validated['image'] = $path;
    }
    
        $product->update($validated);

    return redirect()->route('admin.produk')->with('success','data berhasi diperbarui');
}

    
}
