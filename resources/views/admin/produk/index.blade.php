@extends('layouts.admin')

@section('judul', 'Data Produk')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h4 mb-0">Data Produk</h1>
    <a href="{{ route('admin.produk.create') }}" class="btn btn-success">+ Tambah Produk</a>
</div>

<div class="card shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-success">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th class="text-end">Harga</th>
                    <th class="text-center">Stok</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produk as $p)
                    <tr>
                        <td>{{ $produk->firstItem() + $loop->index }}</td>
                        <td>
                            @if ($p->foto_url)
                                <img src="{{ $p->foto_url }}" alt="{{ $p->nama }}" width="64" height="48" class="rounded" style="object-fit:cover">
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td class="fw-semibold">{{ $p->nama }}</td>
                        <td><span class="badge text-bg-success">{{ $p->kategori->nama }}</span></td>
                        <td class="text-end">Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                        <td class="text-center">{{ $p->stok }}</td>
                        <td class="text-end text-nowrap">
                            <a href="{{ route('admin.produk.edit', $p) }}" class="btn btn-sm btn-warning">Ubah</a>
                            <form action="{{ route('admin.produk.destroy', $p) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Hapus produk {{ addslashes($p->nama) }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="text-center text-muted py-4">Belum ada data produk.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-3">
    {{ $produk->links('pagination::bootstrap-5') }}
</div>
@endsection
