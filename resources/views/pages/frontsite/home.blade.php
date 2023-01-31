@extends('layouts.front')
@section('title', 'Home')
@section('content')
    <div class="fh5co-loader"></div>
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url({{ asset('assets/image/img_bg_1.jpg') }});">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <span class="price">Rp. 90.000</span>
                                    <h2>Clarity V1 </h2>
                                    <p>kaos yang sangat elegan, dengan jaitan yang rapih dan bahan tidak panas.Cocok dipakai
                                        oleh semua kalangan terutama Gen-Z</p>
                                    <p><a href="{{ route('shop') }}" class="btn btn-primary btn-outline btn-lg">Beli
                                            Sekarang</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-services" class="fh5co-bg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-credit-card"></i>
                        </span>
                        <h3>Produk</h3>
                        <p>Kami menjual berbagai macam outfit wanita dan pria, mulai dari kaos unisex, hoody, dan
                            lain-lain.
                            Produk berkualitas, jahitan rapi dan kuat dengan harga yang terjangkau. </p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-wallet"></i>
                        </span>
                        <h3>Save Money</h3>
                        <p>harga bersahabat, tapi kualitasnya jangan diragukan ya ges ya</p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
                        <span class="icon">
                            <i class="icon-paper-plane"></i>
                        </span>
                        <h3>share</h3>
                        <p>Follow toko kami untuk mendapatkan pemberitahuan produk baru atau promo menarik Happy
                            Shopping!</p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    <div id="fh5co-testimonial" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <span>Testimony</span>
                    <h2>Happy Clients</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            @foreach ($testimonis as $testimoni)
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{ Storage::url($testimoni->photo) }}" alt="user">
                                        </figure>
                                        <span>{{ $testimoni->nama }}</span>
                                        <blockquote>
                                            <p>&ldquo;{!! $testimoni->ulasan !!}&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(assets/image/img_bg_5.jpg);">
        <div class="container">
            <div class="row">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-eye"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">Visitors</span>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-shopping-cart"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="100" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-shop"></i>
                                </span>
                                <span class="counter js-counter" data-from="0" data-to="50" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">All Products</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-clock"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="200" data-speed="5000"
                                    data-refresh-interval="50">1</span>
                                <span class="counter-label">Hours Spent</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('after-script')
        <script src="{{ asset('/assets/backsite/third-party/inputmask/dist/jquery.inputmask.js') }}"></script>
        <script src="{{ asset('/assets/backsite/third-party/inputmask/dist/inputmask.js') }}"></script>
        <script src="{{ asset('/assets/backsite/third-party/inputmask/dist/bindings/inputmask.binding.js') }}"></script>
    @endpush
@endsection
