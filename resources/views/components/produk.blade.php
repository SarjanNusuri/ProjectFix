<section id="product" class="py-16 px-16">
  <!-- Judul Section -->
  <div class="flex items-center gap-2 mb-6">
    <div class="w-2 h-6 bg-brand rounded"></div>
    <h2 class="text-xl font-semibold text-gray-800">Produk</h2>
  </div>

  <!-- Grid Produk -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

  @forelse($produk as $item)
    <!-- Card Produk 1 -->
    <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <img src="{{ asset('storage/public/product/'.$item->foto) }}" alt="Mie Ayam" class="w-full h-48 object-contain p-4">
      <div class="px-6 pb-6">
        <p class="text-[#c86d6d] font-semibold mt-2">{{ $item->harga }}</p>
        <h2 class="text-lg font-semibold text-gray-800 mt-1">{{ $item->nama }}</h2>
        <p class="text-sm text-gray-500 mt-1">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, voluptate magni eaque aperiam consequatur consequuntur beatae harum architecto ratione libero dolor impedit soluta quibusdam eum optio nulla odio repellendus? Quo minus quisquam molestiae ad nostrum? Minus explicabo quo alias sapiente sed debitis nobis, officia ullam laudantium sunt non magnam unde.
        </p>
        <!-- Tombol ditengah -->
        <div class="mt-4 flex justify-center">
          <a href="{{ route('user.produk') }}" class="bg-[#c86d6d]/90 text-white text-sm px-4 py-2 rounded-full hover:bg-[#b25b5b] transition">
            Lihat Produk
          </a>
        </div>
      </div>
    </div>
    @empty
    @endforelse
    <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
      <img src="https://cdn-icons-png.flaticon.com/512/3075/3075977.png" alt="Mie Ayam" class="w-full h-48 object-contain p-4">
      <div class="px-6 pb-6">
        <p class="text-[#c86d6d] font-semibold mt-2">Rp. 13.000</p>
        <h2 class="text-lg font-semibold text-gray-800 mt-1">Mie Ayam Spesial Kampus</h2>
        <p class="text-sm text-gray-500 mt-1">
          Mie lembut dengan potongan ayam berbumbu gurih dan kuah kaldu yang nikmat...
        </p>
        <!-- Tombol ditengah -->
        <div class="mt-4 flex justify-center">
          <a href="{{ route('user.produk') }}" class="bg-[#c86d6d]/90 text-white text-sm px-4 py-2 rounded-full hover:bg-[#b25b5b] transition">
            Lihat Produk
          </a>
        </div>
      </div>
    </div>

    
  </div>
</section>