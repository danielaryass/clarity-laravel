@extends('layouts.front')
@section('title', 'Support')
@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
        style="background-image:url({{ asset('assets/image/img_bg_2.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">

                    <div class="fh5co-contact-info">
                        <h3>Contact Information</h3>
                        <ul>
                            <li class="address">Sumedang, Jawabarat <br> Jl. Raya Cibeureum No. 399,<br> Cibeureum Kulon,
                                Kec. Cimalaka,</li>
                            <li class="phone"><a href="https://wa.me/+6285161662112">085161662112</a></li>
                            <li class="email"><a href="mailto:clarity@gmail.com">clarity@gmail.com</a></li>
                            <li class="url"><a href="http://clarityshop.my.id">Clarity Cloth</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 animate-box">
                    <h3>Saran & Kritik</h3>
                    <form class="form form-horizontal" action="{{ route('report.store') }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" id="fname" class="form-control" placeholder="Nama Anda"
                                    name="nama">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" id="email" class="form-control" placeholder="Email Anda"
                                    name="email">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" id="subject" class="form-control" placeholder="Subjek"
                                    name="subject">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="deskripsi" id="message" cols="30" rows="10" class="form-control" placeholder="Ulasan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
