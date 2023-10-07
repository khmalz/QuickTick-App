@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mb-4">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Petugas</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('petugas.update', $user->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Account</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" id="inputName" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" id="inputEmail" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $user->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="form-label">Password (Optional)</label>
                                    <input type="password" id="inputPassword" name="password"
                                        class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="form-check mt-1">
                                        <input type="checkbox" class="form-check-input" id="showPasswordCheckbox">
                                        <label class="form-check-label" for="showPasswordCheckbox">Show Password</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('petugas.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Edit Petugas</button>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Saat checkbox "Show Password" diubah
            $("#showPasswordCheckbox").change(function() {
                var passwordInput = $("#inputPassword");
                if (this.checked) {
                    passwordInput.attr("type", "text"); // Ubah tipe input menjadi teks
                } else {
                    passwordInput.attr("type", "password"); // Ubah tipe input menjadi password
                }
            });
            $("#showConfirmationPasswordCheckbox").change(function() {
                var ConfirmationpasswordInput = $("#inputConfirmationPassword");
                if (this.checked) {
                    ConfirmationpasswordInput.attr("type", "text"); // Ubah tipe input menjadi teks
                } else {
                    ConfirmationpasswordInput.attr("type", "password"); // Ubah tipe input menjadi password
                }
            });
        });
    </script>
@endpush
