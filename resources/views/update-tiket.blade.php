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
                                    <input type="text" class="form-control" id="fullName"
                                        value="{{ old('name', 'Curran Mckee') }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Nomer Telepon*</label>
                                            <input type="tel" class="form-control" id="phone"
                                                value="{{ old('phone', '+62817218291') }}">
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
                                            <input type="email" class="form-control" id="email"
                                                value="{{ old('email', 'curran@gmail.com') }}">
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
                                        <input type="text" class="form-control" id="fullName"
                                            value="{{ old('name', 'Curran Mckee') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ktp" class="form-label">Nomer KTP*</label>
                                        <input type="number" class="form-control" id="ktp"
                                            value="{{ old('ktp', '3128172631') }}">
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
                                        <input type="text" class="form-control" id="fullName"
                                            value="{{ old('name', 'Curran Mckee') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ktp" class="form-label">Nomer KTP*</label>
                                        <input type="number" class="form-control" id="ktp"
                                            value="{{ old('ktp', '3109121391') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-warning text-white"
                                onclick="confirm('apakah sudah yakin?') ? location.href='/detail-tiket' : null">Save</button>
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
