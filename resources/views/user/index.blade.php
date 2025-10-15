@push('navbar')
  <x-navbar/>
@endpush

@push('footer')
  <x-footer/>
@endpush

<x-layout>
  <section id="" class="pt-24 mb-10 bg-produk">
    <div class="bg-[#f5dede] flex flex-col md:flex-row items-center justify-between px-8 md:px-16 py-12">
      <!-- Teks -->
      <div class="max-w-lg">
        <h5 class="text-gray-950  00 font-medium mb-2">Website E-Commerce</h5>
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
          Nikmati cita Rasa,
          <span class="leading-7 block">Dukung Wirausaha Muda</span>
        </h1>
        <p class="mt-4 text-justifiy">
          Kami menghadirkan berbagai cemilan buatan mahasiswa Ekonomi Pembangunan. Lezat, terjangkau, dan dibuat dengan semangat bisnis kreatif untuk meningkatkan nilai ekonomi lokal.
        </p>
        <a href="#product">
          <button class="px-7 py-2 mt-3 bg-white rounded-full">
            Coba Sekarang
          </button>
        </a>
      </div>
  
      <!-- Gambar -->
      <div class="mt-8 md:mt-0 md:w-1/2 flex justify-center">
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" 
            alt="Gambar makanan" 
            class="w-64 md:w-80 object-contain">
      </div>
    </div>

    <div class="bg-gray-100 shadow-md p-4">
      <div class="grid grid-cols-4 md:flex md:justify-around gap-4">
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="icon" class="w-12 h-12 mx-auto" />
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="icon" class="w-12 h-12 mx-auto" />
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="icon" class="w-12 h-12 mx-auto" />
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="icon" class="w-12 h-12 mx-auto" />
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="icon" class="w-12 h-12 mx-auto" />
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="icon" class="w-12 h-12 mx-auto" />
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="icon" class="w-12 h-12 mx-auto" />
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="icon" class="w-12 h-12 mx-auto" />
      </div>
    </div>

  </section>

  <x-about :about="$about" />
<x-produk :product="$product" /> 
</x-layout>