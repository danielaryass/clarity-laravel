@extends('layouts.front')
@section('title', 'Produk')
@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
        style="background-image:url({{ asset('assets/image/img_bg_2.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Produk</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-product">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Products.</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 text-center animate-box">
                        <div class="product">
                            <div class="product-grid"
                                style="background-image: url({{ Storage::url($product->photo_produk[0]->photo) }});object-fit: contain;">
                                <span class="sale"> CLARITY</span>

                                <div class="inner">
                                    <p>
                                        <a href="{{ route('produkdetail', $product->id) }}" class="icon"><i
                                                class="icon-eye"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="product.html">{{ $product->nama_produk }}</a></h3>
                                <span class="price">{{ 'Rp. ' . number_format($product->harga) ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
