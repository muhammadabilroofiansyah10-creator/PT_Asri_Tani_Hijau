<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimoni extends Model
{
    protected $table = 'testimoni';

    protected $fillable = ['produk_id', 'nama', 'kota', 'pesan', 'rating'];

    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }
}
