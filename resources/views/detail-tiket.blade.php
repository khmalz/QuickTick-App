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
                                <div class="entry-title">
                                    @if ($order->status == 'unverified')
                                        <span class="btn btn-sm"
                                            style="border: 1px solid red; color: red; cursor: default;">Unverified</span>
                                    @else
                                        <span class="btn btn-sm"
                                            style="border: 1px solid green; color: green; cursor: default;">Verified</span>
                                    @endif
                                </div>
                                <h2 class="entry-title fs-4">
                                    <p class="fw-semibold">{{ $order->rute->rute_awal }} ({{ $order->rute->asal }}) <i
                                            class="bi bi-arrow-right"></i> {{ $order->rute->rute_akhir }}
                                        ({{ $order->rute->tujuan }})
                                    </p>
                                    <p class="fw-medium fs-6">{{ $order->rute->bus->kode }} ({{ $order->rute->bus->name }})
                                    </p>
                                </h2>
                                <div class="entry-content">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Tanggal</label>
                                        <p class="fw-semibold">{{ $order->rute->departure }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="entry" id="confirm-kontak">
                                <h2 class="entry-title fs-4 d-md-flex justify-content-between d-block">
                                    <p>Detail Kontak (Untuk Tiket)</p>
                                    <a href="{{ route('profile.edit') }}"
                                        class="btn btn-info text-info border-0 bg-transparent p-0">Edit
                                        Kontak</a>
                                </h2>
                                <div class="entry-content">
                                    <div class="mb-3">
                                        <p class="fw-bold fs-6" id="fullNameConfirm">{{ $order->passenger->user->name }}</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Nomer Telepon</label>
                                                <p class="fw-semibold" id="phoneConfirm">
                                                    {{ $order->passenger->telephone }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <p class="fw-semibold" id="emailConfirm">
                                                    {{ $order->passenger->user->email }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry" id="confirm-penumpang">
                                <h2 class="entry-title fs-4 d-md-flex justify-content-between d-block">
                                    <p>Detail Penumpang</p>
                                    <a href="{{ route('tiket.edit', $order->id) }}"
                                        class="btn btn-info text-info border-0 bg-transparent p-0">Edit
                                        Detail</a>
                                </h2>
                                @foreach ($order->passengerOrders as $passenger)
                                    <div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>Orang
                                                        {{ $loop->iteration }}</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <div class="mb-3">
                                                <p class="fw-bold fs-6">{{ $passenger->passenger_name }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Nomer KTP</label>
                                                <p class="fw-semibold">{{ $passenger->passenger_ktp }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="entry" id="confirm-harga">
                                <h2 class="entry-title fs-4 d-flex justify-content-between">
                                    <p>Detail Harga</p>
                                </h2>
                                <div class="entry-content">
                                    <div class="row">
                                        @if ($order->payment)
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <p class="fw-semibold text-danger fs-4">Rp{{ $order->rute->harga }}</p>
                                                <label for="phone" class="form-label text-success">Sudah Dibayar</label>
                                            </div>
                                        @else
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <p class="fw-semibold text-danger fs-4">Rp{{ $order->rute->harga }}</p>
                                                <div class="d-flex flex-column align-items-center">
                                                    <label for="phone" class="form-label text-danger mb-0 pb-0">Belum
                                                        Dibayar</label>
                                                    <small>
                                                        <a href="{{ route('payment.index', $order->id) }}"
                                                            class="text-secondary">Bayar?</a>
                                                    </small>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
