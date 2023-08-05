@extends('layouts.main')

@section('content')
    <main id="main">

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
                        <div class="testimonial-item rounded-3 py-3" style="background-color: rgb(240,243,247)">
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="font-style: normal !important"><strong>Jakarta <i
                                                class="bi bi-arrow-right"></i> Bandung</strong></p>
                                    <div class="d-flex gap-4">
                                        <small>
                                            <p style="font-style: normal !important">Jumat, 4 Juli 2021</p>
                                        </small>
                                        <small>
                                            <p style="font-style: normal !important">1 Dewasa</p>
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center justify-content-end">
                                    <button class="btn btn-success" data-bs-toggle="modal" type="button"
                                        data-bs-target="#changeSearch">Change search</button>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="changeSearch" tabindex="-1" aria-labelledby="changeSearchLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="changeSearchLabel">Pesan Tiket</h1>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="dari" class="form-label">Dari:</label>
                                                <select class="form-select" id="dari" required>
                                                    <option disabled selected>Pilih Tujuan Keberangkatan</option>
                                                    @foreach ($kotas as $kota)
                                                        <option value="{{ $kota }}">{{ $kota }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="ke" class="form-label">Ke:</label>
                                                <select class="form-select" id="ke" required>
                                                    <option disabled selected>Pilih Tujuan Kedatangan</option>
                                                    @foreach ($kotas as $kotas)
                                                        <option value="{{ $kotas }}">{{ $kotas }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="berangkat" class="form-label">Berangkat:</label>
                                                <input type="date" class="form-control" id="berangkat" required
                                                    min="{{ date('Y-m-d') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-8">
                                                <label for="penumpang" class="form-label">Penumpang:</label>
                                                <select class="form-select" id="penumpang" required>
                                                    <option disabled selected>Pilih Jumlah Penumpang</option>
                                                    @for ($dewasa = 1; $dewasa <= 3; $dewasa++)
                                                        @php
                                                            $totalPenumpang = $dewasa;
                                                            $label = "$dewasa Dewasa";
                                                        @endphp
                                                        <option value="{{ $totalPenumpang }}">{{ $label }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end justify-content-end mt-md-0 mt-3">
                                                <button type="submit" class="btn btn-success rounded-3">
                                                    <i class="bi bi-search"></i>
                                                    <span>Cari Tiket</span>
                                                </button>
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

        <!-- ======= Tickets Section ======= -->
        <section id="testimonials" class="testimonials mt-4">
            <div class="container">
                <div class="row gap-3">
                    <div class="col-lg-12" data-aos="fade-up">
                        <div class="testimonial-item">
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
                                                    <a href="/pesan"
                                                        class="btn btn-warning btn-sm rounded-2 text-white">Pesan</a>
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
                                                    <a href="/pesan"
                                                        class="btn btn-warning btn-sm rounded-2 text-white">Pesan</a>
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
