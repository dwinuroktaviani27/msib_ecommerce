<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKaey = 'produk_id';
    public function kategori()
    {
        return $this->belongsTo('App\Models\KategoriProduk', 'kategori_id');
    }
}
