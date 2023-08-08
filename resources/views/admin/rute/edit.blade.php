@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mb-4">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Rute</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('rute.update', '1') }}" method="POST">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Rute</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Bus</label>
                                    <select class="form-control @error('bus_id') is-invalid @enderror" name="bus_id">
                                        <option disabled selected>Pilih</option>
                                        <option value="1">Bus 1</option>
                                        <option value="2">Bus 2</option>
                                        <option value="3">Bus 3</option>
                                    </select>
                                    @error('bus_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputTujuan">Tujuan</label>
                                    <input type="text" id="inputTujuan" type="tujuan"
                                        class="form-control @error('tujuan') is-invalid @enderror"
                                        value="{{ old('tujuan', $rute->tujuan) }}">
                                    @error('tujuan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputRuteAwal">Rute Awal</label>
                                    <input type="text" id="inputRuteAwal" type="rute_awal"
                                        class="form-control @error('rute_awal') is-invalid @enderror"
                                        value="{{ old('rute_awal', $rute->rute_awal) }}">
                                    @error('rute_awal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputRuteAkhir">Rute Akhir</label>
                                    <input type="text" id="inputRuteAkhir" type="rute_akhir"
                                        class="form-control @error('rute_akhir') is-invalid @enderror"
                                        value="{{ old('rute_akhir', $rute->rute_akhir) }}">
                                    @error('rute_akhir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputHarga">Harga</label>
                                    <input type="text" id="inputHarga" type="harga"
                                        class="form-control @error('harga', $rute->harga) is-invalid @enderror"
                                        value="{{ old('harga') }}">
                                    @error('harga')
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
                        <a href="{{ route('rute.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Edit Rute</button>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
