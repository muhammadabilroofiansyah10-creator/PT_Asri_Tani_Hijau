<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = ['kategori_id', 'nama', 'harga', 'stok', 'deskripsi', 'foto'];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function testimoni(): HasMany
    {
        return $this->hasMany(Testimoni::class);
    }

    // URL foto dari storage/public (null jika belum ada foto)
    protected function fotoUrl(): Attribute
    {
        return Attribute::get(fn () => $this->foto ? asset('storage/'.$this->foto) : null);
    }
}
