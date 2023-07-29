<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>About - Flattern Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Flattern
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="d-flex justify-content-center justify-content-md-between container">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="{{ url('mailto:contact@example.com') }}">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
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
                <h1 class="text-light"><a href="{{ url('index.html') }}">Flattern</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="{{ url('index.html') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('index.html') }}">Home</a></li>
                    <li><a class="active" href="{{ url('about.html') }}">About</a></li>
                    <li><a href="{{ url('services.html') }}">Services</a></li>
                    <li><a href="{{ url('testimonials.html') }}">Testimonials</a></li>
                    <li><a href="{{ url('pricing.html') }}">Pricing</a></li>
                    <li><a href="{{ url('portfolio.html') }}">Portfolio</a></li>
                    <li><a href="{{ url('blog.html') }}">Blog</a></li>
                    <li class="dropdown"><a href="{{ url('#') }}"><span>Drop Down</span> <i
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
                    </li>
                    <li><a href="{{ url('contact.html') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About</h2>
                    <ol>
                        <li><a href="{{ url('index.html') }}">Home</a></li>
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
                    <div
                        class="col-md-6 d-flex flex-column justify-content-center align-items-center mb-md-0 mb-3 text-center">
                        <h4 class="fw-bold fs-md-5">Kamu Bisa Menemukan Jaringan Kami</h4>
                        <h4 class="fw-bold">di Hampir Seluruh Kota di Indonesia</h4>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/assets/img/peta.jpg') }}" alt="" class="img-fluid">
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
                        <h3>Flattern</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Terms of
                                    service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Web Development</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Product
                                    Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('#') }}">Graphic Design</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-md-flex container py-4">

            <div class="me-md-auto text-md-start text-center">
                <div class="copyright">
                    &copy; Copyright <strong><span>Flattern</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-md-right pt-md-0 pt-3 text-center">
                <a href="{{ url('#') }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{ url('#') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{ url('#') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{ url('#') }}" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="{{ url('#') }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="{{ url('#') }}" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('/frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/frontend/assets/js/main.js') }}"></script>

</body>

</html>
