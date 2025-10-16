<x-adminMain>
  <!-- Statistik Cards -->
<div class="row g-4 mb-5">
  <div class="col-md-3">
    <div class="p-4 rounded-4 bg-white shadow-sm hover-shadow border h-100 transition" style="transition: 0.3s ease;">
      <p class="mb-1 text-muted">Total Penjualan</p>
      <h4 class="text-danger fw-bold">Rp {{number_format($totaljual,0,',','.') }}</h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="p-4 rounded-4 bg-white shadow-sm hover-shadow border h-100 transition">
      <p class="mb-1 text-muted">Produk Terjual</p>
      <h4 class="text-danger fw-bold">{{ $produkterjual }}</h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="p-4 rounded-4 bg-white shadow-sm hover-shadow border h-100 transition">
      <p class="mb-1 text-muted">Total Pengguna</p>
      <h4 class="text-danger fw-bold">0</h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="p-4 rounded-4 bg-white shadow-sm hover-shadow border h-100 transition">
      <p class="mb-1 text-muted">Pesanan Baru</p>
      <h4 class="text-danger fw-bold">0</h4>
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
            <th>Produk</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @forelse($order as $item)
          <tr>
            <td>{{ $id++ }}</td>
            <td>{{ $item->product->name }}</td>
            <td>{{ $item->created_at->diffForHumans() }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>{{ number_format($item->total_harga,0,',','.') }}</td>
            <td><span class="badge bg-warning text-dark">Menunggu</span></td>
          </tr>
          @empty
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

</x-adminMain>