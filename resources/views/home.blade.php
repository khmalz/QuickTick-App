@extends('layouts.main')

@push('styles')
    <style>
        .image-container {
            height: clamp(200px, 25vw, 210px);
        }

        .image-text-overlay {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 18px;
            box-sizing: border-box;
            transition: font-size 0.3s ease;
        }

        .image-container img {
            filter: brightness(66%);
            object-fit: cover;
            transition: filter 0.3s ease;
        }

        .image-container:hover img {
            filter: brightness(78%);
        }

        .image-container:hover .image-text-overlay {
            font-size: 1.5rem;
        }
    </style>
@endpush

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(frontend/assets/img/slide/slide-1.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Welcome to <span>QuickTick</span></h2>
                            <p>Tempat di mana perjalanan Anda menjadi menyenangkan dan lancar. Ayo, jadikan setiap momen
                                berharga dengan memesan tiket bus Anda sekarang!</p>
                            <div class="text-center"><a href="" class="btn-get-started">Get Started</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(frontend/assets/img/slide/slide-2.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Jelajahi Dunia dengan QuickTick!</h2>
                            <p>Temukan horison baru dan nikmati perjalanan tak terlupakan bersama QuickTick. Biarkan
                                rasa ingin tahu Anda mengembara!</p>
                            <div class="text-center"><a href="" class="btn-get-started">Get Started</a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(frontend/assets/img/slide/slide-3.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Pengalaman Perjalanan Tanpa Batas dengan QuickTick!</h2>
                            <p>Solusi terbaik untuk memesan tiket bus tanpa repot. Sampaikan selamat tinggal pada
                                antrian panjang dan sambutlah kenyamanan. Duduk, santai, dan biarkan QuickTick
                                mengurus
                                rencana perjalanan Anda.</p>
                            <div class="text-center"><a href="" class="btn-get-started">Get Started</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="{{ url('#heroCarousel') }}" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="{{ url('#heroCarousel') }}" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-wallet2"></i></div>
                            <h4 class="title"><a href="{{ url('') }}">Harga Lebih Murah</a></h4>
                            <p class="description">Dengan harga yang jangkau, kamu mendapat hotel yang kamu inginkan.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-credit-card-2-back-fill"></i></div>
                            <h4 class="title"><a href="{{ url('') }}">Pembayaran Simple</a></h4>
                            <p class="description"> Ada banyak cara untuk membayar sesuai yang kamu inginkan. Ada
                                pilihan pembayaran via bank transfer, ATM transfer, Virtual Account (VA), kartu debit
                                online, maupun kartu kredit.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-headset"></i></div>
                            <h4 class="title"><a href="{{ url('') }}">Support Terbaik</a></h4>
                            <p class="description">Melalui pelayanan 24/7 Customer Care, kami akan selalu ada buat
                                kamu. Dapatkan bantuan untuk pemesanan hotel dan tiketmu dengan pelayanan 24/7 Customer
                                Care</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-cash-stack"></i></div>
                            <h4 class="title"><a href="{{ url('') }}">Banyak Promo Spesial</a></h4>
                            <p class="description">Banyak promo untuk tiket & hotel kesayanganmu. Dapatkan diskon harga
                                terbaik agar budget liburan kamu semakin hemat.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-ticket-detailed"></i></div>
                            <h4 class="title"><a href="{{ url('') }}">Mudah Pesan Tiket</a></h4>
                            <p class="description"> Pesan tiket sekaligus hotel dengan mudah dan cepat. Tidak perlu
                                risau, hanya dengan satu sentuhan jari, tiket dan hotel yang kamu butuhkan bisa
                                didapatkan dengan mudah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        {{-- <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="{{ url('frontend/assets/img/portfolio/portfolio-1.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('portfolio-details.html') }}" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{ url('frontend/assets/img/portfolio/portfolio-2.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('portfolio-details.html') }}" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="{{ url('frontend/assets/img/portfolio/portfolio-3.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('portfolio-details.html') }}" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('frontend/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="{{ url('frontend/assets/img/portfolio/portfolio-4.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('portfolio-details.html') }}" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('frontend/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="{{ url('frontend/assets/img/portfolio/portfolio-5.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('portfolio-details.html') }}" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('frontend/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="{{ url('frontend/assets/img/portfolio/portfolio-6.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('portfolio-details.html') }}" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('frontend/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="{{ url('frontend/assets/img/portfolio/portfolio-7.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('portfolio-details.html') }}" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('frontend/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="{{ url('frontend/assets/img/portfolio/portfolio-8.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('portfolio-details.html') }}" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('frontend/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{ url('frontend/assets/img/portfolio/portfolio-9.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('portfolio-details.html') }}" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Portfolio Section -->

        {{-- Popular Bus Destination Section --}}
        <section class="clients">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Popular Bus Destination</h2>
                </div>

                <div class="row justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-3 g-3" style="row-gap: 10px">
                    <div class="col" data-aos="fade-up">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/assets/img/city/Jakarta.jpg') }}"
                                class="w-100 h-100 img-fluid image-text rounded" alt="">
                            <span class="image-text-overlay position-absolute fw-bold w-100 text-center text-white">Ticket
                                to
                                Jakarta</span>
                        </div>

                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/assets/img/city/Bali.jpg') }}"
                                class="w-100 h-100 img-fluid image-text rounded" alt="">
                            <span class="image-text-overlay position-absolute fw-bold w-100 text-center text-white">Ticket
                                to
                                Bali</span>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/assets/img/city/Yogyakarta.jpg') }}"
                                class="w-100 h-100 img-fluid image-text rounded" alt="">
                            <span class="image-text-overlay position-absolute fw-bold w-100 text-center text-white">Ticket
                                to
                                Yogyakarta</span>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/assets/img/city/Bandung.jpg') }}"
                                class="w-100 h-100 img-fluid image-text rounded" alt="">
                            <span class="image-text-overlay position-absolute fw-bold w-100 text-center text-white">Ticket
                                to
                                Bandung</span>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/assets/img/city/Jepara.jpg') }}"
                                class="w-100 h-100 img-fluid image-text rounded" alt="">
                            <span class="image-text-overlay position-absolute fw-bold w-100 text-center text-white">Ticket
                                to
                                Jepara</span>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up">
                        <div class="image-container position-relative">
                            <img src="{{ asset('frontend/assets/img/city/Surabaya.jpeg') }}"
                                class="w-100 h-100 img-fluid image-text rounded" alt="">
                            <span class="image-text-overlay position-absolute fw-bold w-100 text-center text-white">Ticket
                                to
                                Surabaya</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Popular Bus Destination Section --}}

        <!-- ======= Our Partners Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Partners</strong></h2>
                </div>

                <div class="row no-gutters clients-wrap clearfix justify-content-center" data-aos="fade-up">

                    <div class="col-lg-3 col-lg-4 col-md-6 col-12">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/borlindo.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-lg-4 col-md-6 col-12">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/ezri.png') }}" class="img-fluid"
                                alt="">
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
    <!-- End #main -->
@endsection
