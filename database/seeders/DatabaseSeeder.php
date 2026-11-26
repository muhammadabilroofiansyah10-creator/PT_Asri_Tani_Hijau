<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $hias = Kategori::create([
            'nama' => 'Tanaman Hias',
            'deskripsi' => 'Tanaman hias daun dan sukulen untuk mempercantik rumah dan kantor.',
        ]);
        $bibit = Kategori::create([
            'nama' => 'Bibit Buah & Sayur',
            'deskripsi' => 'Bibit unggul siap tanam untuk kebun dan pekarangan.',
        ]);
        $pot = Kategori::create([
            'nama' => 'Pot & Media Tanam',
            'deskripsi' => 'Perlengkapan menanam: pot, tanah, dan pupuk organik.',
        ]);

        // [kategori, nama, harga, stok, deskripsi, emoji, warna1, warna2]
        $data = [
            [$hias, 'Monstera Deliciosa', 85000, 15, 'Tanaman hias daun bolong yang populer. Cocok untuk ruang tamu dengan cahaya terang tidak langsung dan perawatannya mudah.', '🌿', '#a5d6a7', '#2e7d32'],
            [$hias, 'Lidah Mertua', 45000, 30, 'Sansevieria tahan banting yang membantu menyegarkan udara. Hanya perlu disiram seminggu sekali.', '🪴', '#c8e6c9', '#558b2f'],
            [$hias, 'Kaktus Mini Set', 35000, 40, 'Satu set tiga kaktus mini dalam pot kecil. Pas untuk dekorasi meja kerja dan hadiah.', '🌵', '#dcedc8', '#7cb342'],
            [$bibit, 'Bibit Alpukat Mentega', 40000, 25, 'Bibit alpukat hasil sambung pucuk, tinggi sekitar 50 cm. Berbuah lebih cepat dengan daging buah tebal dan gurih.', '🥑', '#c5e1a5', '#33691e'],
            [$bibit, 'Bibit Jeruk Siam', 35000, 20, 'Bibit jeruk siam berakar kuat dan siap tanam di pot besar maupun lahan. Buah manis dan segar.', '🍊', '#ffe0b2', '#ef6c00'],
            [$bibit, 'Bibit Cabai Rawit', 15000, 60, 'Bibit cabai rawit usia 3 minggu. Cocok untuk kebun rumah dan tanam di polybag.', '🌶️', '#ffcdd2', '#c62828'],
            [$pot, 'Pot Tanah Liat 20 cm', 25000, 35, 'Pot tanah liat berpori yang menjaga sirkulasi udara akar. Dilengkapi lubang drainase.', '🏺', '#ffccbc', '#bf360c'],
            [$pot, 'Media Tanam Organik 5 kg', 30000, 50, 'Campuran tanah, sekam bakar, dan kompos siap pakai untuk berbagai jenis tanaman.', '🌱', '#d7ccc8', '#5d4037'],
        ];

        $produk = [];
        foreach ($data as [$kategori, $nama, $harga, $stok, $deskripsi, $emoji, $w1, $w2]) {
            $path = 'produk/'.Str::slug($nama).'.svg';
            Storage::disk('public')->put($path, $this->gambar($emoji, $w1, $w2));

            $produk[$nama] = Produk::create([
                'kategori_id' => $kategori->id,
                'nama' => $nama,
                'harga' => $harga,
                'stok' => $stok,
                'deskripsi' => $deskripsi,
                'foto' => $path,
            ]);
        }

        Testimoni::create([
            'produk_id' => $produk['Monstera Deliciosa']->id,
            'nama' => 'Rina Marlina',
            'kota' => 'Bandar Lampung',
            'pesan' => 'Monstera datang dalam kondisi segar dan packing aman. Daunnya bagus, sekarang jadi pusat perhatian di ruang tamu.',
            'rating' => 5,
        ]);
        Testimoni::create([
            'produk_id' => $produk['Bibit Alpukat Mentega']->id,
            'nama' => 'Pak Hendra',
            'kota' => 'Metro',
            'pesan' => 'Bibit alpukatnya sehat dan akarnya kuat. Dua bulan sudah tumbuh tunas baru. Recommended!',
            'rating' => 5,
        ]);
        Testimoni::create([
            'produk_id' => $produk['Lidah Mertua']->id,
            'nama' => 'Siti Aisyah',
            'kota' => 'Pringsewu',
            'pesan' => 'Harga terjangkau, tanaman sesuai foto. Pengirimannya cepat dan penjualnya ramah.',
            'rating' => 4,
        ]);
        Testimoni::create([
            'produk_id' => null,
            'nama' => 'Dewi Kartika',
            'kota' => 'Kotabumi',
            'pesan' => 'Pelayanan Asri Tani Hijau memuaskan, banyak pilihan tanaman dan mau memberi tips perawatan.',
            'rating' => 5,
        ]);
    }

    // Membuat gambar SVG sederhana sebagai foto contoh (disimpan di storage/public)
    private function gambar(string $emoji, string $w1, string $w2): string
    {
        return <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><defs><linearGradient id="g" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="{$w1}"/><stop offset="1" stop-color="{$w2}"/></linearGradient></defs><rect width="400" height="300" fill="url(#g)"/><text x="200" y="190" font-size="140" text-anchor="middle">{$emoji}</text></svg>
SVG;
    }
}
