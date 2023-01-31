<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// testimoni
use App\Models\Testimoni;
use Illuminate\Support\Facades\Storage;
use File;
class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('pages.backsite.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backsite.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // upload process here
        $path = public_path('app/public/assets/file-product');
        if(!File::isDirectory($path)){
            $response = Storage::makeDirectory('public/assets/file-testimoni');
        }

        // change file locations
        if(isset($data['photo'])){
            $data['photo'] = $request->file('photo')->store(
                'assets/file-testimoni', 'public'
            );
        }else{
            $data['photo'] = "";
        }

        // store to database
        $testimoni = Testimoni::create($data);

        alert()->success('Berhasil', 'Produk Berhasil Ditambahkan');
        return redirect()->route('testimoni.index');
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
    public function destroy(Testimoni $testimoni)
    {
       // first checking old file to delete from storage
        $get_item = $testimoni['photo'];

        $data = 'storage/'.$get_item;
        if (File::exists($data)) {
            File::delete($data);
        }else{
            File::delete('storage/app/public/'.$get_item);
        }

        $testimoni->forceDelete();

        alert()->success('Sukses', 'Testimoni Berhasil Dihapus');
        return back();
    }
}
