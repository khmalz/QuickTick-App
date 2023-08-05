@extends('layouts.main')

@section('content')
    <main id="main" data-success="{{ session('success') }}">

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
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Pesan Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-10 entries">
                        <div class="entry" id="form-pilih-metode">
                            <h2 class="entry-title fs-4">
                                <p>Metode Pembayaran</p>
                            </h2>
                            <div class="entry-content">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Pilih Metode Pembayaran</label>
                                    <select class="form-select" aria-label="Select Metode Pembayaran" id="metodePembayaran"
                                        onchange="showDivPayment(this)" name="metodePembayaran"
                                        data-select-metode={{ old('metodePembayaran') }}>
                                        <option selected disabled>Pilih</option>
                                        <option value="va">Virtual Account</option>
                                        <option value="card">Debit/Credit Card</option>
                                        <option value="wallet">E-wallet</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="entry form-payment" id="form-va" style="display: none">
                            <h2 class="entry-title fs-4">
                                <p>Virtual Account</p>
                            </h2>
                            <div class="entry-content">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Kode</label>
                                    <p class="fw-semibold fs-5">10212121291829</p>
                                </div>
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Yang Dibayar</label>
                                    <p class="fw-semibold fs-5">Rp105.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="entry form-payment" id="form-card" style="display: none">
                            <h2 class="entry-title fs-4">
                                <p>Credit/Debit Card</p>
                            </h2>
                            <div class="entry-content">
                                <div class="mb-3">
                                    <label for="nameCard" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nameCard">
                                </div>
                                <div class="mb-3">
                                    <label for="noCard" class="form-label">Nomer Kartu</label>
                                    <input type="number" class="form-control" id="noCard">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label for="exp" class="form-label">Expiration Date</label>
                                            <div class="col-md-6">
                                                <select class="form-select" id="bulan" required>
                                                    <option value="" selected disabled>Pilih Bulan</option>
                                                    @foreach (range(1, 12) as $bulan)
                                                        <option value="{{ str_pad($bulan, 2, '0', STR_PAD_LEFT) }}">
                                                            {{ str_pad($bulan, 2, '0', STR_PAD_LEFT) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-select" id="tahun" required>
                                                    <option value="" selected disabled>Pilih Tahun</option>
                                                    @php
                                                        $tahun_sekarang = date('Y');
                                                        $tahun_10_tahun_lalu = $tahun_sekarang - 10;
                                                    @endphp
                                                    @foreach (range($tahun_sekarang, $tahun_10_tahun_lalu, -1) as $tahun)
                                                        <option value="{{ $tahun }}">{{ $tahun }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <label for="security" class="form-label">Security Code</label>
                                            <input type="number" class="form-control" id="security">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Yang Dibayar</label>
                                    <p class="fw-semibold fs-5">Rp105.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="entry form-payment" id="form-wallet" style="display: none">
                            <h2 class="entry-title fs-4">
                                <p>E-Wallet</p>
                            </h2>
                            <div class="entry-content">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Pilih Jenis E-Wallet</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected disabled>Pilih</option>
                                        <option value="dana">Dana</option>
                                        <option value="ovo">OVO</option>
                                        <option value="gopay">Gopay</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="no" class="form-label">Nomer</label>
                                    <input type="tel" class="form-control" id="no">
                                </div>
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Yang Dibayar</label>
                                    <p class="fw-semibold fs-5">Rp105.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button onclick="location.href='/success'" class="btn btn-primary">Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Saat halaman dimuat, cek apakah ada data-select-metode pada elemen select
            let selectedMetode = $("#metodePembayaran").data('select-metode');

            if (selectedMetode) {
                $("#metodePembayaran").val(selectedMetode).trigger('change');
            }
        });

        function showDivPayment(select) {
            $(".form-payment").hide();

            let selectedMetode = $(select).val();
            $(`#form-${selectedMetode}`).show();
        };

        function showToast(message, background) {
            Toastify({
                text: message,
                duration: 1800,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
                style: {
                    background,
                },
            }).showToast();
        }

        let successMessage = document.querySelector('main').dataset.success;
        if (successMessage) {
            showToast(successMessage, "#568ee8");
        }
    </script>
@endpush
