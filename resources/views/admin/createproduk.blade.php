<x-adminMain>
  <div class="container-fluid">
    <!-- Judul & Kembali -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold mb-1">
          <i class="bi bi-box2-fill me-2 text-primary"></i> Tambah Produk
        </h4>
        <p class="text-muted mb-0">Isi data produk secara lengkap di bawah ini.</p>
      </div>
      <a href="{{ route('admin.produk') }}" class="btn btn-outline-dark">
        <i class="bi bi-arrow-left"></i> Kembali
      </a>
    </div>

    <!-- Form Tambah Produk -->
    <div class="card shadow-sm border-0">
      <div class="card-body">
        <form action="#" method="POST" enctype="multipart/form-data">
          <div class="row g-3">

            <!-- Nama Produk -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Nama Produk <span class="text-danger">*</span></label>
              <input type="text" name="nama" class="form-control" placeholder="Masukkan nama produk" required>
            </div>

            <!-- Foto Produk -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Foto Produk</label>
              <input type="file" name="foto" class="form-control" accept="image/*">
            </div>

            <!-- Harga -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Harga <span class="text-danger">*</span></label>
              <input type="number" name="harga" class="form-control" placeholder="Contoh: 10000" required>
            </div>

            <!-- Stok -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Stok <span class="text-danger">*</span></label>
              <input type="number" name="stok" class="form-control" placeholder="Masukkan jumlah stok" required>
            </div>

            <!-- Deskripsi -->
            <div class="col-md-12">
              <label class="form-label fw-semibold">Deskripsi</label>
              <textarea name="deskripsi" rows="3" class="form-control" placeholder="Tulis deskripsi singkat produk..."></textarea>
            </div>

            <!-- Tombol Simpan -->
            <div class="col-12 mt-4 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-check2-square me-1"></i> Simpan Produk
              </button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</x-adminMain>
