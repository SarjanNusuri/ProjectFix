
    <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <img src="{{ asset('storage/'.$product->image) }}" alt="Mie Ayam" class="w-full h-48 object-contain p-4">
      <div class="px-6 pb-6">
        <p class="text-[#c86d6d] font-semibold mt-2">{{ number_format($product->price,0,',','.') }}</p>
        <h2 class="text-lg font-semibold text-gray-800 mt-1">{{ $product->name }}</h2>
        <p class="text-sm text-gray-500 mt-1 truncate w-50 ">
          {{ $product->description }}
        </p>
        <!-- Tombol ditengah -->
        <div class="mt-4 flex justify-center">
          <a href="{{ route('user.produk',$product) }}" class="bg-[#c86d6d]/90 text-white text-sm px-4 py-2 rounded-full hover:bg-[#b25b5b] transition">
            Lihat Produk
          </a>
        </div>
      </div>
    </div>
   
    
    