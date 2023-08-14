@extends('layouts.main')

@section('content')
    <main id="main" style="min-height: 70vh">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Tickets</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Tickets</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        {{-- Change Search Section --}}
        <section id="" class="testimonials mb-0 bg-white pb-1">
            <div class="container">
                <div class="row gap-3">
                    <div class="col-lg-12" data-aos="fade-up">
                        <div
                            class="d-flex flex-column align-items-center justify-content-center mx-auto gap-3 rounded border p-3 text-center">
                            <div class="d-flex flex-column align-items-center">
                                <div class="rounded-circle text-primary" style="font-size: 3.5rem;">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                                <h4 class="fw-bold text-primary">Payment Successful</h4>
                            </div>
                            <div>
                                <small>
                                    <p class="m-0">Terimakasih Sudah Memesan dan Melakukan Pembayaran</p>
                                    <p class="m-0">Pesanan Kamu Sudah Masuk ke Laporan, Mau Lihat?</p>
                                </small>
                            </div>
                            <div class="d-flex justify-content-center gap-4">
                                <a href="{{ route('tiket.list') }}" class="btn btn-success btn-sm rounded">Lihat Tiket
                                    Kamu</a>
                                <a href="{{ route('home') }}" class="btn btn-primary btn-sm rounded">Kembali ke Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
