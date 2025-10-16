<x-adminMain>
  <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h4 class="fw-bold mb-1">
          <i class="bi bi-box2-fill me-2 text-primary"></i> Edit Produk
        </h4>
        <p class="text-muted mb-0">Isi data produk secara lengkap di bawah ini.</p>
      </div>
      <a href="{{ route('admin.produk') }}" class="btn btn-outline-dark">
        <i class="bi bi-arrow-left"></i> Kembali
      </a>
    </div>

    <div class="card shadow-sm border-0">
      <div class="card-body">
        <form action="{{ route('admin.update', $product->slug) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row g-3">

    <!-- Kolom Kiri -->
    <div class="col-md-6">
        <!-- Nama Produk -->
        <label class="form-label fw-semibold">Nama Produk </label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" placeholder="{{ $product->name }}" >

        <!-- Harga (diletakkan setelah nama biar sejajar dengan file) -->
        <div class="mt-5">
            <label class="form-label fw-semibold">Harga <span class="text-danger">*</span></label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" placeholder="{{ number_format($product->price,0,',','.') }}" >
        </div>
    </div>

    <!-- Kolom Kanan -->
    <div class="col-md-6 ">
        <!-- Gambar Preview -->
        @if($product->image)
            <div class="w-full aspect-[3/4] max-w-sm overflow-hidden">
                <img src="{{ asset('storage/'.$product->image) }}" class="w-full h-full object-cover"  width="200">
            </div>
        @endif

        <!-- Input File -->
        <label class="form-label fw-semibold">Foto Produk</label>
        <input type="file" name="image" class="form-control" value="{{ $product->image }}" accept="image/*">
    </div>

    <!-- Deskripsi (full width) -->
    <div class="col-md-12">
        <label class="form-label fw-semibold">Deskripsi</label>
        <textarea name="description" rows="5" class="form-control w-full h-30" >{{ $product->description }} </textarea>

    </div>
<input type="hidden" name="stock" value="0" id="">
    <!-- Tombol -->
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
