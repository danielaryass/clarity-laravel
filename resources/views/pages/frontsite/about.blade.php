@extends('layouts.front')
@section('title', 'About Us')
@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
        style="background-image:url({{ asset('assets/image/img_bg_2.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-about">
        <div class="container">
            <div class="about-content">
                <div class="row animate-box">
                    <div class="col-md-6">
                        <div class="desc">
                            <h3>Company History</h3>
                            <p>Clarity merupakan UMKM yang bergerak dibidang clothing. Didirikan pada tahun 2022 oleh
                                Ramdaniel, Bagas , Athan dan Bhakti. Beberapa produk fashion yang ditawarkan ialah baju dan
                                jaket dengan kualitas tinggi dan dijamin keasliannya.</p>
                            <p>Pada masa mula perkembangannya, clarity mencoba memasuki dari komunitas-komunitas yang ada di
                                sumedang yang sudah ramai dengan berbagai brand lokal terkenal. Meski menuai hasil yang
                                belum maksimal, hal itu tidak membuat kami berkecil hati kerana setiap brand memiliki
                                sesuatu hal yang menjadi ciri khasnya masing-masing.</p>
                            <p>Sadar akan minimnya pengalaman, akhirnya clarty mencoba untuk menjalim hubungan kerjasama
                                dengan brand lokal yang terkenal dijawabarat supaya produk hasil karya designer clarity
                                mampu memenuhi kebutuhan pasar.</p>
                            <p>Terimakasih semuanya.</p>
                        </div>
                        <div class="desc">
                            <h3>Mission &amp; Vission</h3>
                            <p>Sebagai Brand Cloth yang turut serta mempromosikan hasil karya anak bangsa dengan menawarkan
                                produk yang berkualitas</p>
                            <p>Menjadi Brand Cloth yang kreatif dengan menawarkan produk berkualitas kepada masyarakat dunia
                                kelayakan mutu.</p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="{{ asset('assets/image/img_bg_5.jpg') }}" alt="about">
                    </div>
                </div>
            </div>
            {{-- <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <span>Productive Staff</span>
                    <h2>Meet Our Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img src="images/person1.jpg" alt="Free HTML5 Templates by gettemplates.co">
                        <h3>Jean Smith</h3>
                        <strong class="role">Chief Executive Officer</strong>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img src="images/person2.jpg" alt="Free HTML5 Templates by gettemplates.co">
                        <h3>Hush Raven</h3>
                        <strong class="role">Co-Owner</strong>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img src="images/person3.jpeg" alt="Free HTML5 Templates by gettemplates.co">
                        <h3>Alex King</h3>
                        <strong class="role">Co-Owner</strong>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
