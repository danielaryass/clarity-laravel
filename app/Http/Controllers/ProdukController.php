<?php

namespace App\Http\Controllers;
// use model produk
use App\Models\Produk;
use App\Models\PhotoProduk;
use Illuminate\Http\Request;
// use File
use File;
// use storage
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Produk::all();
        return view('pages.backsite.produk.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backsite.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $data = [
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'link_tokped' => $request->link_tokped,
            'link_shopee' => $request->link_shopee,
        ];
        $data['harga'] = str_replace(',', '', $data['harga']);
        $data['harga'] = str_replace('IDR ', '', $data['harga']);

       
        $produk = Produk::create($data);

        

        foreach ($request->file('photo') as $photo) {
            $nama_photo = time()."_".$photo->getClientOriginalName();
            $tujuan_upload = 'storage/foto-produk';
            $photo->move($tujuan_upload,$nama_photo);

            $dudata = [
                'produk_id' => $produk->id,
                'photo' => ("foto-produk/".$nama_photo),
            ];
            PhotoProduk::create($dudata);
        }
        
        // alert sukses menambahkan produk
        alert()->success('Berhasil.','Produk telah ditambahkan!');
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $product = Produk::find($id)->with('Photo_Produk')->first();
    $photos = $product->Photo_Produk;
  
    foreach ($photos as $photo) {
        $data = 'storage/'.$photo->photo;
       if (File::exists($data)) {
            File::delete($data);
        }else{
            File::delete('storage/app/public/'.$photo);
        }
    }

    
    $product->delete();

        alert()->success('Berhasil', 'Produk berhasil dihapus');
        return back();
    }
}
