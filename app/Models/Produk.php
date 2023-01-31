<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PhotoProduk;



class produk extends Model
{
    use HasFactory;
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk', 'deskripsi', 'harga', 'link_tokped', 'link_shopee',
    ];
    public function photo_produk()
    {
        return $this->hasMany(PhotoProduk::class,'produk_id');
    }
}
