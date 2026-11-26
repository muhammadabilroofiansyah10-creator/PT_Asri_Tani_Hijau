<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Testimoni;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = Kategori::withCount('produk')->orderBy('nama')->get();
        $produk = Produk::with('kategori')->latest()->get();
        $testimoni = Testimoni::with('produk')->latest()->get();

        return view('home', compact('kategori', 'produk', 'testimoni'));
    }
}
