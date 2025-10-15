<x-adminMain>
  <!-- Judul dan Tombol Tambah -->
<div class="d-flex justify-content-between align-items-center mb-4">
  <h4 class="fw-bold mb-0">Daftar Produk</h4>
  <a  href="{{ route('admin.produkcreate') }}" class="btn btn-danger">
    <i class="bi bi-plus-circle me-1"></i> Tambah Produk
  </a>
</div>

<!-- Tabel Produk -->
<div class="card shadow-sm border-0">
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Terjual</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2</td>
            <td>Brownies Kukus</td>
            <td>Kue</td>
            <td>
              <img src="{{ asset('assets/image/me.jpg') }}" alt="Nama Produk" class="img-thumbnail rounded" style="width: 60px; height: 60px; object-fit: cover;">
            </td>
            <td>Rp 25.000</td>
            <td>80</td>
            <td>34</td>
            <td class="text-center">
              <div class="dropdown">
                <button class="bg-transparent btn-sm border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-three-dots-vertical"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item text-warning" href="#">
                      <i class="bi bi-pencil-square"></i>
                      Edit
                    </a>
                  </li>
                  <li>
                    <button 
                      type="button"
                      class="dropdown-item text-danger"
                      data-bs-toggle="modal"
                      data-bs-target="#confirmDeleteModal"
                    >
                      <i class="bi bi-trash"></i> Hapus
                    </button>
                  </li>
                </ul>
              </div>
            </td>
            
          </tr>
          <!-- Tambahkan baris produk lainnya di sini -->
        </tbody>
      </table>
    </div>
  </div>
</div>

</x-adminMain>


<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="confirmDeleteModalLabel"><i class="bi bi-exclamation-triangle-fill me-2"></i>Konfirmasi Hapus</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah kamu yakin ingin menghapus produk ini? Tindakan ini tidak dapat dibatalkan.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <form action="#" method="POST">
          <!-- @csrf dan @method('DELETE') jika pakai Laravel -->
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
