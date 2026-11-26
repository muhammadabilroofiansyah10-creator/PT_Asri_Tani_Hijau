@extends('layouts.admin')

@section('judul', $produk->exists ? 'Ubah Produk' : 'Tambah Produk')

@section('content')
<h1 class="h4 mb-3">{{ $produk->exists ? 'Ubah Produk' : 'Tambah Produk' }}</h1>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ $produk->exists ? route('admin.produk.update', $produk) : route('admin.produk.store') }}"
              method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            @if ($produk->exists)
                @method('PUT')
            @endif

            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama', $produk->nama) }}"
                           class="form-control @error('nama') is-invalid @enderror">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                    <label for="kategori_id" class="form-label">Kategori</label>
                    <select id="kategori_id" name="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror">
                        <option value="">-- Pilih kategori --</option>
                        @foreach ($kategori as $k)
                            <option value="{{ $k->id }}" @selected(old('kategori_id', $produk->kategori_id) == $k->id)>{{ $k->nama }}</option>
                        @endforeach
                    </select>
                    @error('kategori_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                    <label for="harga" class="form-label">Harga (Rp)</label>
                    <input type="number" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}"
                           class="form-control @error('harga') is-invalid @enderror">
                    @error('harga') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" id="stok" name="stok" value="{{ old('stok', $produk->stok) }}"
                           class="form-control @error('stok') is-invalid @enderror">
                    @error('stok') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-12">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4"
                              class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                    @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-12">
                    <label for="foto" class="form-label">Foto Produk (jpg, png, webp, maks. 2 MB)</label>
                    <input type="file" id="foto" name="foto" accept="image/*"
                           class="form-control @error('foto') is-invalid @enderror">
                    @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror

                    @if ($produk->foto_url)
                        <div class="mt-2">
                            <div class="small text-muted mb-1">Foto saat ini (kosongkan jika tidak ingin mengganti):</div>
                            <img src="{{ $produk->foto_url }}" alt="{{ $produk->nama }}" height="100" class="rounded border">
                        </div>
                    @endif
                </div>
            </div>

            <div class="mt-4 d-flex gap-2">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
