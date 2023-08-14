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
                    @forelse ($tickets as $ticket)
                        <div class="col-lg-12" data-aos="fade-up">
                            <div class="testimonial-item">
                                <div class="row gap-3">
                                    <div class="col-12">
                                        <h3>{{ $ticket->rute->bus->company->name }}</h3>
                                        <span>{{ $ticket->rute->bus->name }}</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row w-100 align-items-center" style="row-gap: 15px">
                                            <div class="col-md-4">
                                                <small>{{ $ticket->rute->rute_awal }} ({{ $ticket->rute->asal }}) <i
                                                        class="bi bi-arrow-right"></i>
                                                    {{ $ticket->rute->rute_akhir }} ({{ $ticket->rute->tujuan }})</small>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                {{ $ticket->rute->departure }}
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row text-md-end gap-1">
                                                    <div class="col-12">
                                                        Rp{{ $ticket->rute->harga }}/org
                                                    </div>
                                                    <div class="col-12">
                                                        <a href="{{ route('tiket.show', $ticket->rute->id) }}"
                                                            class="btn btn-info btn-sm rounded-2 text-white">Detail</a>
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
