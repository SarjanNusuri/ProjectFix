

<x-layout>
  <div class="bg-produk min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-[#2e2e2e] mb-6">Masuk ke Akun Anda</h2>
    
    <form action="{{ route('login') }}" method="POST" class="space-y-5">
      @csrf
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-brand focus:border-brand">
      </div>
      
      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
        <input type="password" id="password" name="password" required
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-brand focus:border-brand">
      </div>
      
      <!-- Tombol Login -->
      <div>
        <button type="submit"
                class="w-full bg-brand text-white py-2 px-4 rounded-md hover:bg-[#bd8d91] transition">
          Masuk
        </button>
      </div>
    </form>
  </div>
  </div>
</x-layout>