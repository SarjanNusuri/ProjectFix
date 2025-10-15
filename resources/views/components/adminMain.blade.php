<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

  <!-- Sidebar -->
  <div id="sidebar" class="bg-white border-end position-fixed h-100 shadow-sm">
    <div class="p-4 border-bottom">
      <h1 class="fs-4 fw-bold text-danger">Website Admin</h1>
      <p class="text-muted small">Dashboard Penjualan</p>
    </div>
    <nav class="p-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('admin.dashboard') ? 'active text-primary fw-semibold' : 'text-dark' }}" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-house-door-fill"></i> Dashboard
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('admin.produk', 'admin.produkcreate') ? 'active text-primary fw-semibold' : 'text-dark' }}" href="{{ route('admin.produk') }}">
            <i class="bi bi-box-seam"></i> Produk
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('admin.member') ? 'active text-primary fw-semibold' : 'text-dark' }}" href="#">
            <i class="bi bi-people-fill"></i> Member
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('admin.laporan') ? 'active text-primary fw-semibold' : 'text-dark' }}" href="#">
            <i class="bi bi-bar-chart-fill"></i> Laporan
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('admin.pengaturan') ? 'active text-primary fw-semibold' : 'text-dark' }}" href="#">
            <i class="bi bi-gear-fill"></i> Pengaturan
          </a>
        </li>
      </ul>

    </nav>
    <div class="p-3 border-top mt-auto">
      <button class="btn btn-danger w-100">Keluar</button>
    </div>
  </div>

  <!-- Wrapper (Navbar + Main Content) -->
  <div id="main-wrapper">

    <!-- Navbar (Sekarang dalam wrapper agar ikut lebar konten) -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light border-bottom px-4">
      <button id="toggleSidebar" class="btn btn-outline-secondary me-3">
        ☰
      </button>
      <div class="d-flex justify-content-between w-100">
        <div class="d-flex align-items-center gap-3">
          <input type="text" class="form-control form-control-sm" placeholder="Cari..." />
          <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=admin" alt="Avatar" class="rounded-circle border" width="40" height="40" />
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="p-4">
      <div class="container-fluid">
        {{ $slot }}
      </div>
    </main>

  </div>

  <script src="{{ asset('assets/js/script.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
