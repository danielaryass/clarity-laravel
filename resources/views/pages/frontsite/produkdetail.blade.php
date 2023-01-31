  @extends('layouts.front')
  @section('title', 'Produk Detail')
  @section('content')
      <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
          style="background-image:url({{ asset('assets/image/img_bg_2.jpg') }});">
          <div class="overlay"></div>
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center">
                      <div class="display-t">
                          <div class="display-tc animate-box" data-animate-effect="fadeIn">
                              <h1>Produk Detail</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      <div id="fh5co-product">
          <div class="container ">
              <div class="row">
                  <div class="col-md-10 col-md-offset-1 animate-box ">
                      <div class="owl-carousel owl-carousel-fullwidth product-carousel">
                          @foreach ($products->photo_produk as $photo)
                              <div class="item">
                                  <div class="active text-center">
                                      <figure>
                                          <img src="{{ Storage::url($photo->photo) }}" alt="user" style="height: 900px">
                                      </figure>

                                  </div>
                              </div>
                          @endforeach
                      </div>
                      <div class="row animate-box">
                          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                              <h2>{{ $products->nama_produk }}</h2>
                              <a href="{{ $products->link_shopee }}" target="_blank">
                                  <img src="{{ asset('assets/image/shopee.png') }}" alt="" style="width: 300px"></a>
                              <a href="{{ $products->link_tokped }}" target="_blank">
                                  <img src="{{ asset('assets/image/tokopedia.png') }}" alt=""
                                      style="width: 300px"></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row" style="margin-bottom: 90px">
                  <div class="col-md-10 col-md-offset-1 ">
                      <div class="fh5co-tabs animate-box">
                          <ul class="fh5co-tab-nav">
                              <li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i
                                              class="icon-file"></i></span><span class="hidden-xs">Product
                                          Details</span></a></li>
                              <li><a href="#" data-tab="2"><span class="icon visible-xs"><i
                                              class="icon-bar-graph"></i></span><span
                                          class="hidden-xs">Specification</span></a></li>
                              <li><a href="#" data-tab="3"><span class="icon visible-xs"><i
                                              class="icon-star"></i></span><span class="hidden-xs">Feedback &amp;
                                          Ratings</span></a></li>
                          </ul>

                          <!-- Tabs -->
                          <div class="fh5co-tab-content-wrap">

                              <div class="fh5co-tab-content tab-content active" data-tab-content="1">
                                  <div class="col-md-10 col-md-offset-1">
                                      <span class="price">{{ 'Rp. ' . number_format($products->harga) ?? '' }}</span>
                                      <h2>{{ $products->nama_produk }}</h2>
                                      <p>{!! $products->deskripsi !!}
                                      </p>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <h2 class="uppercase">happy Shopping</h2>
                                          </div>
                                          <div class="col-md-6">
                                              <h2 class="uppercase">Murah dan Terjangkau</h2>
                                          </div>
                                      </div>

                                  </div>
                              </div>

                              <div class="fh5co-tab-content tab-content" data-tab-content="2">
                                  <div class="col-md-10 col-md-offset-1">
                                      <h3>Product Specification</h3>
                                      <ul>
                                          <li>Material Cotton Combed 30S</li>
                                          <li>Sablon Plastisol High Density</li>
                                          <li>Perbedaan Warna produk dengan display pada settingan layar monitor anda dapat
                                              terjadi</li>
                                      </ul>

                                  </div>
                              </div>

                              <div class="fh5co-tab-content tab-content" data-tab-content="3">
                                  <div class="col-md-10 col-md-offset-1">
                                      <h3>Happy Buyers</h3>
                                      <div class="feed">
                                          <div>
                                              <blockquote>
                                                  <p>Ga pernah nyesal belik disini, selalu beli sekali duaa. bahan juga
                                                      ademm kainnya juga teballl langganann aku sih</p>
                                              </blockquote>
                                              <h3>&mdash; Aida Nurfitri</h3>
                                              <span class="rate">
                                                  <i class="icon-star2"></i>
                                                  <i class="icon-star2"></i>
                                                  <i class="icon-star2"></i>
                                                  <i class="icon-star2"></i>
                                                  <i class="icon-star2"></i>
                                              </span>
                                          </div>
                                          <div>
                                              <blockquote>
                                                  <p>Kualitas barang baik, Produk original, harganya jg pas dg kualitas
                                                      barangg, sukaa banget siii, rekomend banget
                                                  </p>
                                              </blockquote>
                                              <h3>&mdash; Nur_asrifah21</h3>
                                              <span class="rate">
                                                  <i class="icon-star2"></i>
                                                  <i class="icon-star2"></i>
                                                  <i class="icon-star2"></i>
                                                  <i class="icon-star2"></i>
                                                  <i class="icon-star2"></i>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endsection
