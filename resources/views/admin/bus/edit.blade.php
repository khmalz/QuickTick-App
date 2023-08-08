@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mb-4">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Bus</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('bus.update', '1') }}" method="POST">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Bus</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Perusahaan</label>
                                    <select class="form-control @error('company_id') is-invalid @enderror"
                                        name="company_id">
                                        <option disabled selected>Pilih</option>
                                        <option value="1">Perusahaan 1</option>
                                        <option value="2">Perusahaan 2</option>
                                        <option value="3">Perusahaan 3</option>
                                    </select>
                                    @error('company_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputKode">Kode</label>
                                    <input type="text" id="inputKode" type="kode"
                                        class="form-control @error('kode') is-invalid @enderror"
                                        value="{{ old('kode', $bus->kode) }}">
                                    @error('kode')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" id="inputName" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $bus->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputSeat">Seat</label>
                                    <input type="text" id="inputSeat" type="seat"
                                        class="form-control @error('seat') is-invalid @enderror"
                                        value="{{ old('seat', $bus->seat) }}">
                                    @error('seat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('bus.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Create Bus</button>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
