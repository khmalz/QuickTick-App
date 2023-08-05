@extends('layouts.main')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pesan</h2>
                    <ol>
                        <li><a href="{{ url('index.html') }}">Home</a></li>
                        <li>Pesan</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Pesan Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-8 entries">
                        <div class="entry" id="form-kontak">
                            <h2 class="entry-title fs-4">
                                <p>Detail Kontak (Untuk Tiket)</p>
                            </h2>
                            <div class="entry-content">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Nama Lengkap*</label>
                                    <input type="text" class="form-control" id="fullName">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Nomer Telepon*</label>
                                            <input type="tel" class="form-control" id="phone">
                                            <small>
                                                <div id="phoneHelpBlock" class="form-text">
                                                    contoh +628712738122
                                                </div>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email*</label>
                                            <input type="email" class="form-control" id="email">
                                            <small>
                                                <div id="emailHelpBlock" class="form-text">
                                                    contoh email@example.com
                                                </div>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry" id="form-penumpang">
                            <h2 class="entry-title fs-4">
                                <p>Detail Penumpang</p>
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
                                        <label for="fullName" class="form-label">Nama Lengkap*</label>
                                        <input type="text" class="form-control" id="fullName">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ktp" class="form-label">Nomer KTP*</label>
                                        <input type="number" class="form-control" id="ktp">
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
                                        <label for="fullName" class="form-label">Nama Lengkap*</label>
                                        <input type="text" class="form-control" id="fullName">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ktp" class="form-label">Nomer KTP*</label>
                                        <input type="number" class="form-control" id="ktp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry" id="confirm-kontak">
                            <h2 class="entry-title fs-4 d-flex justify-content-between">
                                <p>Detail Kontak (Untuk Tiket)</p>
                                <button class="btn btn-info text-info border-0 bg-transparent">Edit
                                    Detail</button>
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
                                <button class="btn btn-info text-info border-0 bg-transparent">Edit
                                    Detail</button>
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
                                        <label for="phone" class="form-label">Yang Harus Dibayar</label>
                                        <p class="fw-semibold text-danger fs-4">Rp105.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="d-flex justify-content-end">
                            <button class="btn btn-primary">Continue</button>
                        </div> --}}
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-warning text-white"
                                onclick="confirm('apakah sudah yakin?') ? location.href='/payment' : null">Continue
                                to
                                Payment</button>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-item categories d-flex align-items-center justify-content-between mb-2">
                                <p class="fw-semibold">Bandung <i class="bi bi-arrow-right"></i> Jakarta</p>
                                <small>
                                    <p>Baraya (Regular)</p>
                                </small>
                            </div>
                            <div class="sidebar-item tags">
                                <p>Jumat, 4 Juli 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
