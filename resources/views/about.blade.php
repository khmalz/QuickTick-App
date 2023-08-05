@extends('layouts.main')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right">
                    </div>
                    <div class="col-xl-7 ps-lg-5 pe-lg-1 d-flex align-items-stretch ps-0">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-up">Tentang QuickTick</h3>
                            <p data-aos="fade-up">
                                Platform pemesanan tiket bus yang didedikasikan untuk memberikan pengalaman perjalanan
                                yang mudah, cepat, dan terpercaya bagi para pelanggannya. Kami hadir untuk membuat
                                setiap perjalanan menjadi lebih lancar dan menyenangkan
                            </p>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- Promotion Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center mb-md-0 mb-3 text-center"
                        data-aos="fade-up">
                        <h4 class="fw-bold fs-md-5">Kamu Bisa Menemukan Jaringan Kami</h4>
                        <h4 class="fw-bold">di Hampir Seluruh Kota di Indonesia</h4>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/assets/img/peta.jpg') }}" alt="" class="img-fluid"
                            data-aos="fade-left">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Promotion Section -->

        <!-- ======= Our Partners Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Partners</strong></h2>
                </div>

                <div class="row no-gutters clients-wrap clearfix justify-content-center" data-aos="fade-up">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/borlindo.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/ezri.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/hibagroup.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/mayasari_bakti.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/sempati_star.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/steady_safe.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Our Partners Section -->

    </main>
@endsection
