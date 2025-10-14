<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin | AlgoTri</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

  <!-- Sidebar -->
  <aside class="fixed top-0 left-0 h-screen w-64 bg-white border-r shadow-sm flex flex-col justify-between">
    <div>
      <div class="p-6 border-b">
        <h1 class="text-2xl font-bold text-rose-600">AlgoTri Admin</h1>
        <p class="text-sm text-gray-500">Dashboard Penjualan</p>
      </div>
      <nav class="p-4">
        <ul class="space-y-2">
          <li><a href="#" class="block p-3 rounded-lg hover:bg-rose-100 text-gray-700 font-medium">🏠 Dashboard</a></li>
          <li><a href="#" class="block p-3 rounded-lg hover:bg-rose-100 text-gray-700 font-medium">📦 Produk</a></li>
          <li><a href="#" class="block p-3 rounded-lg hover:bg-rose-100 text-gray-700 font-medium">🧑‍🤝‍🧑 Member</a></li>
          <li><a href="#" class="block p-3 rounded-lg hover:bg-rose-100 text-gray-700 font-medium">📊 Laporan</a></li>
          <li><a href="#" class="block p-3 rounded-lg hover:bg-rose-100 text-gray-700 font-medium">⚙️ Pengaturan</a></li>
        </ul>
      </nav>
    </div>
    <div class="p-4 border-t">
      <button class="w-full bg-rose-600 text-white py-2 rounded-lg hover:bg-rose-700 transition">Keluar</button>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="ml-64 p-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <div>
        <h2 class="text-3xl font-bold text-gray-800">Dashboard Utama</h2>
        <p class="text-gray-500">Selamat datang kembali, Admin 👋</p>
      </div>
      <div class="flex items-center gap-4">
        <input type="text" placeholder="Cari..." class="border rounded-lg px-4 py-2 text-sm" />
        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=admin" alt="avatar" class="w-10 h-10 rounded-full border" />
      </div>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
        <p class="text-gray-500 text-sm">Total Penjualan</p>
        <h3 class="text-2xl font-bold text-rose-600">Rp 12.450.000</h3>
      </div>
      <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
        <p class="text-gray-500 text-sm">Produk Terjual</p>
        <h3 class="text-2xl font-bold text-rose-600">150+</h3>
      </div>
      <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
        <p class="text-gray-500 text-sm">Total Pengguna</p>
        <h3 class="text-2xl font-bold text-rose-600">320</h3>
      </div>
      <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
        <p class="text-gray-500 text-sm">Pesanan Baru</p>
        <h3 class="text-2xl font-bold text-rose-600">8</h3>
      </div>
    </div>

    <!-- Table -->
    <div class="bg-white p-6 rounded-2xl shadow">
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-bold text-gray-700">Transaksi Terbaru</h3>
        <a href="#" class="text-sm text-rose-600 hover:underline">Lihat Semua</a>
      </div>
      <table class="w-full text-left border-t border-gray-100">
        <thead>
          <tr class="text-gray-600">
            <th class="py-3">Nama Produk</th>
            <th class="py-3">Pembeli</th>
            <th class="py-3">Status</th>
            <th class="py-3 text-right">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t hover:bg-gray-50">
            <td class="py-3">Mie Ayam Spesial</td>
            <td class="py-3">Rina Putri</td>
            <td class="py-3 text-green-600">Selesai</td>
            <td class="py-3 text-right font-semibold">Rp15.000</td>
          </tr>
          <tr class="border-t hover:bg-gray-50">
            <td class="py-3">Burger Ekonomi</td>
            <td class="py-3">Faiz Bambela</td>
            <td class="py-3 text-yellow-600">Diproses</td>
            <td class="py-3 text-right font-semibold">Rp20.000</td>
          </tr>
          <tr class="border-t hover:bg-gray-50">
            <td class="py-3">Mie Nyemek Level 3</td>
            <td class="py-3">Indah Ningsih</td>
            <td class="py-3 text-green-600">Selesai</td>
            <td class="py-3 text-right font-semibold">Rp13.000</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

</body>
</html>
