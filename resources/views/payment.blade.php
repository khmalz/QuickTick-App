@extends('layouts.main')

@section('content')
    <main id="main" data-success="{{ session('success') }}">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pesan</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
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
                    <form action="{{ route('payment.store', $order->id) }}" method="POST">
                        @csrf
                        <div class="col-lg-10 entries">
                            <div class="entry" id="form-pilih-metode">
                                <h2 class="entry-title fs-4">
                                    <p>Metode Pembayaran</p>
                                </h2>
                                <div class="entry-content">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Pilih Metode Pembayaran</label>
                                        <select class="form-select" aria-label="Select Metode Pembayaran"
                                            id="metodePembayaran" onchange="showDivPayment(this)" name="metode"
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
                                        <input type="text" class="form-control" id="nameCard" name="card[name]">
                                    </div>
                                    <div class="mb-3">
                                        <label for="noCard" class="form-label">Nomer Kartu</label>
                                        <input type="number" class="form-control" id="noCard" name="card[number]">
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="exp" class="form-label">Expiration Date</label>
                                                <input type="hidden" name="card[expiration_date]" id="expiration">
                                                <div class="col-md-6">
                                                    <select class="form-select" id="bulan" name="card[bulan]">
                                                        <option value="" selected disabled>Pilih Bulan</option>
                                                        @foreach (range(1, 12) as $bulan)
                                                            <option value="{{ str_pad($bulan, 2, '0', STR_PAD_LEFT) }}">
                                                                {{ str_pad($bulan, 2, '0', STR_PAD_LEFT) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-select" id="tahun" name="card[tahun]">
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
                                                <input type="number" class="form-control" id="security"
                                                    name="card[security_code]">
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
                                        <label for="jenisWallet" class="form-label">Pilih Jenis E-Wallet</label>
                                        <select class="form-select" aria-label="Default select example" id="jenisWallet"
                                            name="wallet[wallet]">
                                            <option selected disabled>Pilih</option>
                                            <option value="dana">Dana</option>
                                            <option value="ovo">OVO</option>
                                            <option value="gopay">Gopay</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="noWallet" class="form-label">Nomer</label>
                                        <input type="tel" class="form-control" id="noWallet" name="wallet[number]">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Yang Dibayar</label>
                                        <p class="fw-semibold fs-5">Rp105.000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary" id="paymentButton">Pay</button>
                            </div>
                        </div>
                    </form>
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

            $('#bulan, #tahun').on('change', function() {
                const bulan = $('#bulan').val();
                const tahun = $('#tahun').val();

                if (bulan && tahun) {
                    const expirationDate = `${tahun}-${bulan}-01`;
                    $('#expiration').val(expirationDate);
                }
            });

            $("#paymentButton").click(function() {
                if (!validatePayment()) {
                    return false;
                }
            });

            let successMessage = document.querySelector('main').dataset.success;
            if (successMessage) {
                showToast(successMessage, "#568ee8");
            }
        });

        function validatePayment() {
            let selectedMethod = $("#metodePembayaran").val();

            if (!selectedMethod) {
                $("#metodePembayaran").focus();
                return false;
            }

            if (selectedMethod === "card") {
                let cardFields = ["nameCard", "noCard", "bulan", "tahun", "security"];
                for (let field of cardFields) {
                    let input = $(`#${field}`);
                    if (!input.val()) {
                        alert("Harap isi semua field pada form Debit/Credit Card.");
                        input.focus();
                        return false;
                    }
                }
            } else if (selectedMethod === "wallet") {
                let walletFields = ["jenisWallet", "noWallet"];
                for (let field of walletFields) {
                    let input = $(`#${field}`);
                    if (!input.val()) {
                        alert("Harap isi semua field pada form E-Wallet.");
                        input.focus();
                        return false;
                    }
                }
            }

            return true;
        }


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
    </script>
@endpush
