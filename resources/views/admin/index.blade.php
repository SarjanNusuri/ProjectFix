<x-adminMain>
  <!-- Statistik Cards -->
<div class="row g-4 mb-5">
  <div class="col-md-3">
    <div class="p-4 rounded-4 bg-white shadow-sm hover-shadow border h-100 transition" style="transition: 0.3s ease;">
      <p class="mb-1 text-muted">Total Penjualan</p>
      <h4 class="text-danger fw-bold">Rp 12.450.000</h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="p-4 rounded-4 bg-white shadow-sm hover-shadow border h-100 transition">
      <p class="mb-1 text-muted">Produk Terjual</p>
      <h4 class="text-danger fw-bold">150+</h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="p-4 rounded-4 bg-white shadow-sm hover-shadow border h-100 transition">
      <p class="mb-1 text-muted">Total Pengguna</p>
      <h4 class="text-danger fw-bold">320</h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="p-4 rounded-4 bg-white shadow-sm hover-shadow border h-100 transition">
      <p class="mb-1 text-muted">Pesanan Baru</p>
      <h4 class="text-danger fw-bold">8</h4>
    </div>
  </div>
</div>

<!-- Transaksi Baru Table -->
<div class="card shadow-sm border-0">
  <div class="card-header bg-white">
    <h5 class="mb-0">Transaksi Baru</h5>
  </div>
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Nama Pembeli</th>
            <th>Produk</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Ayu Pratiwi</td>
            <td>Paket Snack A</td>
            <td>15 Okt 2025</td>
            <td>Rp 45.000</td>
            <td><span class="badge bg-warning text-dark">Menunggu</span></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Rudi Hartono</td>
            <td>Paket Makanan Ringan B</td>
            <td>15 Okt 2025</td>
            <td>Rp 60.000</td>
            <td><span class="badge bg-success">Selesai</span></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Lina Kurniawan</td>
            <td>Camilan Pedas</td>
            <td>14 Okt 2025</td>
            <td>Rp 30.000</td>
            <td><span class="badge bg-danger">Dibatalkan</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</x-adminMain>