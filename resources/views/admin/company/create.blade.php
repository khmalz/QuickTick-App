@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mb-4">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Company</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Company</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" id="inputName" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="logoFile">Upload Logo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('logo') is-invalid @enderror" id="logoFile"
                                                name="logo" onchange="previewImage()">
                                            <label class="custom-file-label" for="logoFile">Choose image</label>
                                        </div>
                                    </div>
                                    @error('logo')
                                        <small>
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        </small>
                                    @enderror
                                    <img class="img-preview col-md-8 col-lg-4 d-none mt-3 rounded p-0" alt="empty">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('company.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Create Company</button>
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
        function previewImage() {
            const image = document.querySelector("#logoFile")
            const imgPreview = document.querySelector(".img-preview")

            imgPreview.classList.remove("d-none");
            imgPreview.classList.add("d-block");

            const [file] = image.files
            if (file) {
                const blob = URL.createObjectURL(file)
                imgPreview.src = blob
            }
        }

        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endpush
