<x-layout>
  <section class="max-w-5xl mx-auto py-10 px-4 pt-26" x-data="{ qty: 1 }">
    <div class="grid md:grid-cols-2 gap-10 items-center">

      <!-- Gambar Produk -->
      <div class="flex justify-center">
        <img src="https://cdn-icons-png.flaticon.com/512/3075/3075977.png"
             alt="Mie Ayam Spesial Kampus"
             class="w-80 h-80 object-contain drop-shadow-md">
      </div>

      <!-- Detail Produk -->
      <div>
        <h2 class="text-2xl font-semibold mb-1">Mie Ayam Spesial Kampus</h2>

        
        <!-- Harga -->
        <p class="text-lg font-semibold text-red-800 mb-3">Rp. 13.000</p>

        <!-- Deskripsi -->
        <p class="text-gray-600 mb-5">
          Mie lembut dengan potongan ayam berbumbu gurih dan kuah kaldu yang hangat.
          Cocok untuk isi tenaga sebelum kuliah atau saat lembur tugas.
        </p>

        <hr class="mb-5">

        <!-- Tombol jumlah dan aksi -->
        <div class="flex items-center gap-3 mb-5">

          <!-- Tombol Jumlah -->
          <div class="flex items-center border border-gray-500 rounded-lg overflow-hidden">
            <!-- Minus -->
            <button @click="if(qty>1) qty--"
              class="px-3 py-2 bg-rose-100 hover:bg-rose-200 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-rose-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
              </svg>
            </button>

            <!-- Jumlah -->
            <span class="px-4 select-none text-gray-700 font-medium" x-text="qty"></span>

            <!-- Plus -->
            <button @click="qty++"
              class="px-3 py-2 bg-rose-100 hover:bg-rose-200 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-rose-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
              </svg>
            </button>
          </div>

          <!-- Tombol Pesan -->
          <button class="bg-rose-400 hover:bg-rose-500 text-white font-medium px-4 py-2 rounded-lg transition">
            Pesan Sekarang
          </button>

          <!-- Favorit -->
          <button class="p-2 shadow rounded-lg hover:bg-rose-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-rose-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/>
            </svg>
          </button>
        </div>

        <!-- Informasi Delivery -->
        <div class="w-[300px] border rounded-lg px-4 py-3 flex items-start gap-3 text-sm text-gray-600 shadow bg-white">
        <div class="flex items-start gap-3 w-full">
          <div class="w-10 h-10 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
          </svg>
          </div>

          <div class="flex flex-col">
            <h2 class="font-medium text-gray-800 mb-1">Delivery</h2>
            <p class="text-gray-500 text-xs underline">Pastikan alamat pengiriman benar</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr class="my-5 font-bold">

  <x-produk></x-produk>

</x-layout>