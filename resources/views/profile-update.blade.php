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
                        <form action="{{ route('profile.update') }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="entry" id="form-kontak">
                                <h2 class="entry-title fs-4">
                                    <p>Profile</p>
                                </h2>
                                <div class="entry-content">
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="fullName" name="name" value="{{ old('name', $user->name) }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email', $user->email) }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <small>
                                            <div id="emailHelpBlock" class="form-text">
                                                contoh email@example.com
                                            </div>
                                        </small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Nomer Telepon</label>
                                                <input type="tel" name="telephone"
                                                    class="form-control @error('telephone') is-invalid @enderror"
                                                    id="phone"
                                                    value="{{ old('telephone', $user->passenger->telephone) }}">
                                                @error('telephone')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <small>
                                                    <div id="phoneHelpBlock" class="form-text">
                                                        contoh 628712738122
                                                    </div>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                                <select class="form-control @error('gender') is-invalid @enderror"
                                                    name="gender">
                                                    <option disabled selected>Pilih</option>
                                                    <option
                                                        {{ old('gender', $user->passenger->gender) == 'L' ? 'selected' : null }}
                                                        value="L">
                                                        Laki-laki
                                                    </option>
                                                    <option
                                                        {{ old('gender', $user->passenger->gender) == 'P' ? 'selected' : null }}
                                                        value="P">
                                                        Perempuan
                                                    </option>
                                                </select>
                                                @error('gender')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <button type="button" onclick="showFormPassword()"
                                        class="btn btn-sm text-primary border-0 bg-transparent p-0">Ganti
                                        Password?</button>
                                </div>
                            </div>
                            <div class="entry" id="form-password" style="display: none">
                                <h2 class="entry-title fs-4 d-flex justify-content-between">
                                    <p>Ganti Password</p>
                                    <button type="button" onclick="hideFormPassword()"
                                        class="btn text-danger border-0 bg-transparent">Batal</button>
                                </h2>
                                <div class="entry-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password">
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="password_confirmation" class="form-label">Retype
                                                    Password</label>
                                                <input type="password" class="form-control" name="password_confirmation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-3">
                                <button class="btn btn-primary text-white">Change</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@push('scripts')
    <script>
        function showFormPassword() {
            $('#form-password').show();
        }

        function hideFormPassword() {
            $('#form-password').hide();
        }
    </script>
@endpush
