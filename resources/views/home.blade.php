@extends('layouts.main')

@push('styles')
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

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
                <div class="carousel-item active"
                    style="background-image: url({{ asset('frontend/assets/img/slide/slide-1.jpg') }});">
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
                <div class="carousel-item"
                    style="background-image: url({{ asset('frontend/assets/img/slide/slide-2.jpg') }});">
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
                <div class="carousel-item"
                    style="background-image: url({{ asset('frontend/assets/img/slide/slide-3.jpg') }});">
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
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="rounded-4 border p-4 shadow-lg" style="background-color: rgb(246, 245, 245)">
                            <h2 class="mb-4">Pesan Tiket</h2>
                            <form action="{{ route('search_tiket') }}" method="GET">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="dari" class="form-label">Dari:</label>
                                        <select class="form-select" id="select2-asal"
                                            data-placeholder="Pilih Asal Keberangkatan" name="asal" required>
                                            <option></option>
                                            @foreach ($terminals as $terminal)
                                                <option value="{{ $terminal->name }}">{{ $terminal->name }} -
                                                    {{ $terminal->city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ke" class="form-label">Ke:</label>
                                        <select class="form-select" id="select2-tujuan"
                                            data-placeholder="Pilih Tujuan Keberangkatan" name="tujuan">
                                            <option></option>
                                            @foreach ($terminals as $terminal)
                                                <option value="{{ $terminal->name }}">{{ $terminal->name }} -
                                                    {{ $terminal->city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="berangkat" class="form-label">Berangkat:</label>
                                        <input type="date" name="departure" class="form-control" id="berangkat"
                                            min="{{ date('Y-m-d') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <label for="penumpang" class="form-label">Penumpang:</label>
                                        <select class="form-select" id="penumpang" name="seat">
                                            <option disabled selected>Pilih Jumlah Penumpang</option>
                                            @for ($dewasa = 1; $dewasa <= 5; $dewasa++)
                                                <option value="{{ $dewasa }}">{{ $dewasa }} Dewasa
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-end justify-content-end mt-md-0 mt-3">
                                        <button type="submit" class="btn btn-success rounded-3">
                                            <i class="bi bi-search"></i>
                                            <span>Search Tiket</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cta Section -->

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

@push('scripts')
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('#select2-asal').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });

        $('#select2-tujuan').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
    </script>
@endpush
