<?php

namespace App\Http\Controllers;
// use product
use App\Models\Produk;
// use testimoni
use App\Models\Testimoni;
// use report
use App\Models\Report;

use Illuminate\Http\Request;

class FrontsiteController extends Controller
{
    public function home()
    {
        $products = Produk::with('Photo_Produk')->get();
        $testimonis = Testimoni::all();
        return view('pages.frontsite.home', compact('products', 'testimonis'));
    }
        public function storeonline()
    {
        return view('pages.frontsite.storeonline');
    }
         public function storeoffline()
    {
        return view('pages.frontsite.storeoffline');
    }
    public function produk()
    {
        $products = Produk::with('Photo_Produk')->get();
        return view('pages.frontsite.produk', compact('products'));
    }
        public function about()
    {
        return view('pages.frontsite.about');
    }
    public function support()
    {
        return view('pages.frontsite.support');
    }
       public function produkdetail($id)
    {
        $products = Produk::with('Photo_Produk')->where('id', $id)->first();
        return view('pages.frontsite.produkdetail', compact('products'));
    }
}
