<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>QuickTick</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="d-flex justify-content-center justify-content-md-between container">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="{{ url('mailto:contact@example.com') }}">contact@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+087762891372</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="{{ url('#') }}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="{{ url('#') }}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{ url('#') }}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="{{ url('#') }}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="d-flex justify-content-between container">

            <div class="logo">
                <h1 class="text-light"><a href="{{ url('index.html') }}">QuickTick</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active" href="{{ url('index.html') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    {{-- <li class="dropdown"><a href="{{ url('#') }}"><span>Drop Down</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('#') }}">Drop Down 1</a></li>
                            <li class="dropdown"><a href="{{ url('#') }}"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{ url('#') }}">Deep Drop Down 1</a></li>
                                    <li><a href="{{ url('#') }}">Deep Drop Down 2</a></li>
                                    <li><a href="{{ url('#') }}">Deep Drop Down 3</a></li>
                                    <li><a href="{{ url('#') }}">Deep Drop Down 4</a></li>
                                    <li><a href="{{ url('#') }}">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('#') }}">Drop Down 2</a></li>
                            <li><a href="{{ url('#') }}">Drop Down 3</a></li>
                            <li><a href="{{ url('#') }}">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ url('contact.html') }}">Contact</a></li>
                    <li><a href="{{ route('login') }}">Sign in</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(frontend/assets/img/slide/slide-1.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Welcome to <span>QuickTick</span></h2>
                            <p>tempat di mana perjalanan Anda menjadi menyenangkan dan lancar. Ayo, jadikan setiap momen
                                berharga dengan memesan tiket bus Anda sekarang!</p>
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
    </section><!-- End Hero -->

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
        </section><!-- End Services Section -->

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
                            <img src="{{ asset('frontend/assets/img/clients/mayasari_bakti.png') }}"
                                class="img-fluid" alt="">
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

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>QuickTick</h3>
                        {{-- <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p> --}}
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Tentang QuickTick</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Contact us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Terms of
                                    service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Lainnya</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Privacy Policy</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Terms &
                                    Conditions</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">FAQ</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="{{ url('#') }}" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
