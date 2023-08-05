@extends('layouts.main')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>My Tickets</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>My Tickets</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Tickets Section ======= -->
        <section id="testimonials" class="testimonials mt-4">
            <div class="container border border-2 p-2">
                <div class="row gap-3">
                    <div class="col-lg-12" data-aos="fade-up">
                        <div class="testimonial-item border">
                            <div class="row gap-3">
                                <div class="col-12">
                                    <h3>Jackal Holidays</h3>
                                    <span>Luxury</span>
                                </div>
                                <div class="col-12">
                                    <div class="row w-100 align-items-center">
                                        <div class="col-md-4">
                                            Bandung <i class="bi bi-arrow-right"></i> Jakarta
                                        </div>
                                        <div class="col-md-4 text-center">
                                            3J 35M
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row gap-1 text-end">
                                                <div class="col-12">
                                                    Rp100.000/org
                                                </div>
                                                <div class="col-12">
                                                    <a href="/detail-tiket"
                                                        class="btn btn-info btn-sm rounded-2 text-white">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-item">
                            <div class="row gap-3">
                                <div class="col-12">
                                    <h3>Baraya</h3>
                                    <span>Reguler</span>
                                </div>
                                <div class="col-12">
                                    <div class="row w-100">
                                        <div class="col">
                                            Semarang <i class="bi bi-arrow-right"></i> Surabaya
                                        </div>
                                        <div class="col text-center">
                                            2J 12M
                                        </div>
                                        <div class="col">
                                            <div class="row gap-1 text-end">
                                                <div class="col-12">
                                                    Rp95.000/org
                                                </div>
                                                <div class="col-12">
                                                    <a href="/detail-tiket"
                                                        class="btn btn-info btn-sm rounded-2 text-white">Detail</a>
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
        </section>
        <!-- End Testimonials Section -->

    </main><!-- End #main -->
@endsection
