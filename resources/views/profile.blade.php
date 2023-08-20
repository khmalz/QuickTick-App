@extends('layouts.main')

@section('content')
    <main id="main" style="min-height: 70vh">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Profile</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Profile</li>
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
                        <div>
                            <div class="entry" id="detail-tiket">
                                <h2 class="entry-title fs-4 d-flex justify-content-between">
                                    <div>
                                        <p class="fw-semibold">{{ $user->name }}
                                            ({{ $user->passenger->gender == 'L' ? 'Laki-laki' : 'Perempuan' }})</p>
                                        <p style="font-size: 0.9rem" class="fw-medium">{{ $user->email }}</p>
                                    </div>
                                    <a href="{{ route('profile.edit') }}" class="btn btn-info text-info border-0 bg-transparent">Edit
                                        Profile</a>
                                </h2>
                                <div class="entry-content">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">No Phone</label>:
                                        <p class="fw-semibold">{{ $user->passenger->telephone }}</p>
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
