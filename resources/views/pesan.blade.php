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
                <form action="{{ route('order.store', $rute->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 entries" id="form-pesan">
                            <div class="entry" id="form-kontak">
                                <h2 class="entry-title fs-4 d-flex justify-content-between">
                                    <p>Detail Kontak (Untuk Tiket)</p>
                                    <a href="/profile-update" class="btn btn-info text-info border-0 bg-transparent">Edit
                                        Kontak</a>
                                </h2>
                                <div class="entry-content">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" disabled id="fullName"
                                            value="{{ $user->name }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Nomer Telepon</label>
                                                <input type="tel" disabled class="form-control" id="phone"
                                                    value="{{ $user->passenger->telephone }}">
                                                <small>
                                                    <div id="phoneHelpBlock" class="form-text">
                                                        contoh 628712738122
                                                    </div>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" disabled class="form-control" id="email"
                                                    value="{{ $user->email }}">
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
                                <div class="mb-3" id="selectJumlahPenumpang">
                                    <label for="dari" class="form-label">Jumlah Penumpang</label>
                                    <select class="form-select" id="jumlah" name="jumlah_penumpang" required
                                        onchange="showFormPenumpang(this)">
                                        <option disabled selected>Pilih</option>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option {{ $rute->available_seats < $i ? 'disabled' : '' }}
                                                value="{{ $i }}">{{ $i }} Penumpang
                                                {{ $rute->available_seats < $i ? '(TIdak Tersisa)' : '' }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div id="formContainer">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" type="button" id="buttonContinue">Continue</button>
                            </div>
                        </div>

                        <div class="col-lg-8 entries" id="confirm-pesan" style="display: none">
                            <div class="entry" id="confirm-kontak">
                                <h2 class="entry-title fs-4 d-flex justify-content-between">
                                    <p>Detail Kontak (Untuk Tiket)</p>
                                    <a href="{{ route('profile.edit') }}"
                                        class="btn btn-info text-info border-0 bg-transparent">Edit
                                        Kontak</a>
                                </h2>
                                <div class="entry-content">
                                    <div class="mb-3">
                                        <p class="fw-bold fs-6" id="fullNameConfirm">{{ $user->name }}</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Nomer Telepon</label>
                                                <p class="fw-semibold" id="phoneConfirm">{{ $user->passenger->telephone }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <p class="fw-semibold" id="emailConfirm">{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry" id="confirm-penumpang">
                                <h2 class="entry-title fs-4 d-flex justify-content-between">
                                    <p>Detail Penumpang</p>
                                    <button onclick="showForm()" class="btn btn-info text-info border-0 bg-transparent">Edit
                                        Detail</button>
                                </h2>
                                <div id="penumpangContainer"></div>
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
                            <div class="d-flex justify-content-end">
                                <input type="hidden" name="passenger_id" value="{{ $user->passenger->id }}">
                                <input type="hidden" name="rute_id" value="{{ $rute->id }}">
                                <button class="btn btn-warning text-white" type="submit"
                                    onclick="return confirm('apakah sudah yakin?')">Continue
                                    to
                                    Payment</button>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="sidebar-item categories mb-2">
                                    <p class="fw-semibold">{{ $rute->rute_awal }} ({{ $rute->asal }}) <i
                                            class="bi bi-arrow-right"></i> {{ $rute->rute_akhir }} ({{ $rute->tujuan }})
                                    </p>
                                    <small>
                                        <p>{{ $rute->bus->kode }} ({{ $rute->bus->name }})</p>
                                    </small>
                                </div>
                                <div class="sidebar-item tags">
                                    <p>{{ $rute->departure }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </main>
@endsection

@push('scripts')
    <script>
        function showForm() {
            $("#form-pesan").show();
            $("#confirm-pesan").hide();
        }

        function showConfirm() {
            $("#form-pesan").hide();
            $("#confirm-pesan").show();
        }

        function showFormPenumpang(select) {
            let jumlah = $(select).val();
            let formContainer = $('#formContainer');
            formContainer.empty();

            for (let i = 1; i <= jumlah; i++) {
                let formPenumpang = `
                        <div id="formPenumpang${i}">
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>Orang ${i}</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <div class="mb-3">
                                    <label for="fullName${i}" class="form-label">Nama Lengkap*</label>
                                    <input type="text" class="form-control" id="fullName${i}" name="data[nama][]" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ktp${i}" class="form-label">Nomer KTP*</label>
                                    <input type="number" class="form-control" id="ktp${i}" name="data[ktp][]" required>
                                </div>
                            </div>
                        </div>
                    `;
                formContainer.append(formPenumpang);
            }
        }

        function displayConfirmPenumpang(data) {
            let penumpangContainer = $('#penumpangContainer');
            penumpangContainer.empty();

            // Loop melalui data dan memasukkan elemen HTML
            data.forEach(function(penumpang, index) {
                let penumpangElement = `
                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Orang ${index + 1}</a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <div class="mb-3">
                            <p class="fw-bold fs-6">${penumpang.name}</p>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomer KTP</label>
                            <p class="fw-semibold">${penumpang.ktp}</p>
                        </div>
                    </div>
                `;
                penumpangContainer.append(penumpangElement);
            });
        }

        function validateForm() {
            let selectedValue = $('#jumlah').val();
            if (selectedValue === null) {
                $('#jumlah').focus();
                return false;
            }

            let isValid = true;
            for (let i = 1; i <= selectedValue; i++) {
                let namaValue = $(`#fullName${i}`).val();
                let ktpValue = $(`#ktp${i}`).val();

                if (!namaValue || !ktpValue) {
                    alert('Harap isi semua kolom pada form penumpang ' + i + '.');
                    $(`#fullName${i}`).focus();
                    isValid = false;
                    break;
                }
            }

            return isValid;
        }

        document.addEventListener('DOMContentLoaded', function() {
            let data = [];

            $('#buttonContinue').click(function() {
                if (!validateForm()) {
                    return;
                }

                showConfirm();

                data = [];
                let jumlah = $('#jumlah').val();

                for (let i = 1; i <= jumlah; i++) {
                    let nama = $(`#fullName${i}`).val();
                    let ktp = $(`#ktp${i}`).val();

                    data.push({
                        name: nama,
                        ktp: ktp
                    });
                }

                console.log(data);

                displayConfirmPenumpang(data)
            });
        })
    </script>
@endpush
