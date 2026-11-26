<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::with('kategori')->latest()->paginate(8);

        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        return view('admin.produk.form', [
            'produk' => new Produk(),
            'kategori' => Kategori::orderBy('nama')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validasi($request);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('produk', 'public');
        }

        Produk::create($data);

        return redirect()->route('admin.produk.index')->with('sukses', 'Produk berhasil ditambahkan.');
    }

    public function edit(Produk $produk)
    {
        return view('admin.produk.form', [
            'produk' => $produk,
            'kategori' => Kategori::orderBy('nama')->get(),
        ]);
    }

    public function update(Request $request, Produk $produk)
    {
        $data = $this->validasi($request);

        if ($request->hasFile('foto')) {
            if ($produk->foto) {
                Storage::disk('public')->delete($produk->foto);
            }
            $data['foto'] = $request->file('foto')->store('produk', 'public');
        }

        $produk->update($data);

        return redirect()->route('admin.produk.index')->with('sukses', 'Produk berhasil diperbarui.');
    }

    public function destroy(Produk $produk)
    {
        if ($produk->foto) {
            Storage::disk('public')->delete($produk->foto);
        }

        $produk->delete();

        return redirect()->route('admin.produk.index')->with('sukses', 'Produk berhasil dihapus.');
    }

    // Validasi sisi server (wajib diisi, maksimal karakter, tipe data)
    private function validasi(Request $request): array
    {
        return $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'kategori_id' => ['required', 'exists:kategori,id'],
            'harga' => ['required', 'integer', 'min:0', 'max:100000000'],
            'stok' => ['required', 'integer', 'min:0', 'max:100000'],
            'deskripsi' => ['required', 'string', 'min:10', 'max:1000'],
            'foto' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ], [
            'required' => ':attribute wajib diisi.',
            'string' => ':attribute harus berupa teks.',
            'integer' => ':attribute harus berupa angka bulat.',
            'exists' => ':attribute yang dipilih tidak valid.',
            'nama.max' => 'Nama produk maksimal :max karakter.',
            'deskripsi.min' => 'Deskripsi minimal :min karakter.',
            'deskripsi.max' => 'Deskripsi maksimal :max karakter.',
            'min' => ':attribute minimal :min.',
            'max' => ':attribute maksimal :max.',
            'image' => 'File harus berupa gambar.',
            'mimes' => 'Foto harus berformat jpg, jpeg, png, atau webp.',
            'foto.max' => 'Ukuran foto maksimal 2 MB.',
        ], [
            'nama' => 'Nama produk',
            'kategori_id' => 'Kategori',
            'harga' => 'Harga',
            'stok' => 'Stok',
            'deskripsi' => 'Deskripsi',
            'foto' => 'Foto',
        ]);
    }
}
