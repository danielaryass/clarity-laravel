<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use model produk;
use App\Models\Produk;



class PhotoProduk extends Model
{
     use HasFactory;
    
    protected $table = 'photo_produk';

    protected $fillable = [
        'produk_id', 'photo'
    ];
 public function produk()
    {
        return $this->belongsTo(Produk::class,'produk_id','id');
    }
}
