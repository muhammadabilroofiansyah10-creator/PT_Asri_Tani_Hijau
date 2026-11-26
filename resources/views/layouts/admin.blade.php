<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') - Admin Asri Tani Hijau</title>
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-sm navbar-dark" style="background:#123524">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('admin.produk.index') }}">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo" height="32">
            <span>Admin Asri Tani Hijau</span>
        </a>
        <a href="{{ route('home') }}" class="btn btn-outline-light btn-sm" target="_blank">Lihat Website</a>
    </div>
</nav>

<main class="container py-4">
    @if (session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>
    @endif

    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
