@extends('layouts.main')

@push('styles')
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endpush

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
                                    <p style="font-style: normal !important">
                                        <strong>{{ request('asal') }}</strong>
                                        @if (request('tujuan'))
                                            <i class="bi bi-arrow-right"></i> {{ request('tujuan') }}
                                        @endif
                                    </p>

                                    <div class="d-flex gap-4">
                                        @if (request('departure'))
                                            <small>
                                                <p style="font-style: normal !important">
                                                    {{ date('d-m-Y', strtotime(request('departure'))) }}</p>
                                            </small>
                                        @endif
                                        @if (request('seat'))
                                            <small>
                                                <p style="font-style: normal !important">{{ request('seat') }} Dewasa</p>
                                            </small>
                                        @endif
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
                                                <select class="form-select" id="select2-asal"
                                                    data-placeholder="Pilih Asal Keberangkatan" name="asal">
                                                    <option></option>
                                                    @foreach ($terminals as $terminal)
                                                        <option {{ request('asal') == $terminal->name ? 'selected' : null }}
                                                            value="{{ $terminal->name }}">{{ $terminal->name }} -
                                                            {{ $terminal->city->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="ke" class="form-label">Ke:</label>
                                                <select class="form-select" id="select2-tujuan"
                                                    data-placeholder="Pilih Tujuan Keberangkatan" name="tujuan">
                                                    <option></option>
                                                    @foreach ($terminals as $terminal)
                                                        <option
                                                            {{ request('tujuan') == $terminal->name ? 'selected' : null }}
                                                            value="{{ $terminal->name }}">{{ $terminal->name }} -
                                                            {{ $terminal->city->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="berangkat" class="form-label">Berangkat:</label>
                                                <input type="date" class="form-control" id="berangkat" required
                                                    value="{{ request('departure') }}" min="{{ date('Y-m-d') }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-8">
                                                <label for="penumpang" class="form-label">Penumpang:</label>
                                                <select class="form-select" id="penumpang" required>
                                                    <option disabled selected>Pilih Jumlah Penumpang</option>
                                                    @for ($dewasa = 1; $dewasa <= 5; $dewasa++)
                                                        <option value="{{ $dewasa }}">{{ $dewasa }} Dewasa
                                                        </option>
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
                    @forelse ($rutes as $rute)
                        <div class="col-lg-12" data-aos="fade-up">
                            <div class="testimonial-item">
                                <div class="row gap-3">
                                    <div class="col-12">
                                        <h3>{{ $rute->bus->company->name }}</h3>
                                        <span>{{ $rute->bus->name }} ({{ $rute->available_seats }} Tersisa)</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row w-100 align-items-center" style="row-gap: 15px">
                                            <div class="col-md-4">
                                                <small>{{ $rute->rute_awal }} ({{ $rute->asal }}) <i
                                                        class="bi bi-arrow-right"></i>
                                                    {{ $rute->rute_akhir }} ({{ $rute->tujuan }})</small>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                {{ $rute->departure }}
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row text-md-end gap-1">
                                                    <div class="col-12">
                                                        Rp{{ $rute->harga }}/org
                                                    </div>
                                                    <div class="col-12">
                                                        <a href="{{ route('order.index', $rute->id) }}"
                                                            class="btn btn-warning btn-sm rounded-2 text-white">Pesan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12" data-aos="fade-up">
                            <div class="testimonial-item">
                                <div class="row justify-content-center align-items-center gap-3">
                                    <div class="col-12">
                                        <h3 class="fs-4 text-center">Data not found</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

    </main><!-- End #main -->
@endsection

@push('scripts')
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('#select2-asal').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });

        $('#select2-tujuan').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
    </script>
@endpush
