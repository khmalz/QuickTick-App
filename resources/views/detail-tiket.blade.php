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

        {{-- Detail Tiket Section --}}
        <section id="blog" class="blog mb-0 bg-white pb-1">
            <div class="container">
                <div class="row gap-3">
                    <div class="col-lg-12" data-aos="fade-up">
                        <div class="rounded border p-3">
                            <div class="entry" id="detail-tiket">
                                <h2 class="entry-title fs-4">
                                    <p class="fw-semibold">Bandung <i class="bi bi-arrow-right"></i> Jakarta</p>
                                    <p class="fw-medium fs-6">Baraya (Regular)</p>
                                </h2>
                                <div class="entry-content">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Tanggal</label>
                                        <p class="fw-semibold">Jum'at 7 Juni 2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="entry" id="confirm-kontak">
                                <h2 class="entry-title fs-4 d-flex justify-content-between">
                                    <p>Detail Kontak (Untuk Tiket)</p>
                                    <a href="/update-tiket" class="btn btn-info text-info border-0 bg-transparent">Edit
                                        Detail</a>
                                </h2>
                                <div class="entry-content">
                                    <div class="mb-3">
                                        <p class="fw-bold fs-6">Curran Mckee</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Nomer Telepon</label>
                                                <p class="fw-semibold">+62817218291</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <p class="fw-semibold">curran@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry" id="confirm-penumpang">
                                <h2 class="entry-title fs-4 d-flex justify-content-between">
                                    <p>Detail Penumpang</p>
                                    <a href="/update-tiket" class="btn btn-info text-info border-0 bg-transparent">Edit
                                        Detail</a>
                                </h2>
                                <div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="blog-single.html">Orang 1</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <div class="mb-3">
                                            <p class="fw-bold fs-6">Curran Mckee</p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Nomer KTP</label>
                                            <p class="fw-semibold">3128172631</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="blog-single.html">Orang 2</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <div class="mb-3">
                                            <p class="fw-bold fs-6">Jade Edwards</p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Nomer KTP</label>
                                            <p class="fw-semibold">3109121391</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry" id="confirm-harga">
                                <h2 class="entry-title fs-4 d-flex justify-content-between">
                                    <p>Detail Harga</p>
                                </h2>
                                <div class="entry-content">
                                    <div class="row">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fw-semibold text-danger fs-4">Rp105.000</p>
                                            <div class="d-flex flex-column align-items-center">
                                                <label for="phone" class="form-label text-danger mb-0 pb-0">Belum
                                                    Dibayar</label>
                                                <small>
                                                    <a href="/payment" class="text-secondary">Bayar?</a>
                                                </small>
                                            </div>
                                        </div>
                                        {{-- <div class="d-flex justify-content-between align-items-center mb-3">
                                            <p class="fw-semibold text-danger fs-4">Rp105.000</p>
                                            <label for="phone" class="form-label text-success">Sudah Dibayar</label>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection