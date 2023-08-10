@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mb-4">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Bus</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('bus.update', $bus->id) }}" method="POST">
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
                                        @foreach ($companies as $company)
                                            <option
                                                {{ old('company_id', $bus->company->id) == $company->id ? 'selected' : null }}
                                                value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputKode1">Kode</label>
                                    <input type="hidden" name="kode" value="{{ old('kode', $bus->kode) }}"
                                        id="kode">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" id="inputKode1" name="kode1"
                                                class="form-control @error('kode1') is-invalid @enderror"
                                                value="{{ old('kode1') }}">
                                            @error('kode1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="align-self-center col-auto">
                                            <span>-</span>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="inputKode2" name="kode2"
                                                class="form-control @error('kode2') is-invalid @enderror"
                                                value="{{ old('kode2') }}">
                                            @error('kode2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
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
                                    <input type="text" id="inputSeat" type="seat" name="seat"
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
                        <button type="submit" class="btn btn-success float-right">Edit Bus</button>
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
        document.addEventListener("DOMContentLoaded", function() {
            let kodeInput = $("#kode").val().split("-");

            $("#inputKode1").val(kodeInput[0] || '');
            $("#inputKode2").val(kodeInput[1] || '');

            kodeInput = $('#kode');
            let inputKode1 = $('#inputKode1');
            let inputKode2 = $('#inputKode2');

            // Fungsi untuk mengupdate nilai input kode
            function updateKode() {
                let value1 = inputKode1.val().toUpperCase();
                let value2 = inputKode2.val();
                kodeInput.val(`${value1}-${value2}`);
            }

            // Tambahkan event listener untuk setiap perubahan pada input kode1 dan kode2
            inputKode1.on('input', updateKode);
            inputKode2.on('input', updateKode);
        });
    </script>
@endpush
