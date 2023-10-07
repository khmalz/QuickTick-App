@extends('admin.layouts.main')

@push('styles')
    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

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
            <form action="{{ route('rute.update', $rute->id) }}" method="POST">
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
                                    <select
                                        class="form-control @error('bus_id') is-invalid @enderror select2 select2-lightblue"
                                        name="bus_id" data-dropdown-css-class="select2-lightblue" style="width: 100%;"
                                        required>
                                        <option disabled selected>Pilih</option>
                                        @foreach ($buses as $bus)
                                            <option {{ old('bus_id', $rute->bus_id) == $bus->id ? 'selected' : null }}
                                                value="{{ $bus->id }}">{{ $bus->company->name }} -
                                                {{ $bus->kode }}</option>
                                        @endforeach
                                    </select>
                                    @error('bus_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Asal</label>
                                    <select
                                        class="form-control @error('asal') is-invalid @enderror select2 select2-lightblue"
                                        name="asal" onchange="selectRute(this, '#ruteAwal')"
                                        data-dropdown-css-class="select2-lightblue" style="width: 100%;" required>
                                        <option disabled selected>Pilih</option>
                                        @foreach ($cities as $city)
                                            <option data-terminals='@json($city->terminals)'
                                                {{ old('asal', $rute->asal) == $city->name ? 'selected' : '' }}
                                                value="{{ $city->name }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('asal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tujuan</label>
                                    <select
                                        class="form-control @error('tujuan') is-invalid @enderror select2 select2-lightblue"
                                        name="tujuan" onchange="selectRute(this, '#ruteAkhir')"
                                        data-dropdown-css-class="select2-lightblue" style="width: 100%;" required>
                                        <option disabled selected>Pilih</option>
                                        @foreach ($cities as $city)
                                            <option data-terminals='@json($city->terminals)'
                                                {{ old('tujuan', $rute->tujuan) == $city->name ? 'selected' : '' }}
                                                value="{{ $city->name }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tujuan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Rute Awal</label>
                                    <select
                                        class="form-control @error('rute_awal') is-invalid @enderror select2 select2-lightblue"
                                        name="rute_awal" data-rute-awal="{{ old('rute_awal', $rute->rute_awal) }}"
                                        id="ruteAwal" data-dropdown-css-class="select2-lightblue" style="width: 100%;"
                                        required>
                                        <option disabled selected>Pilih Rute</option>
                                    </select>
                                    @error('rute_awal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Rute Akhir</label>
                                    <select
                                        class="form-control @error('rute_akhir') is-invalid @enderror select2 select2-lightblue"
                                        name="rute_akhir" data-rute-akhir="{{ old('rute_akhir', $rute->rute_akhir) }}"
                                        id="ruteAkhir" data-dropdown-css-class="select2-lightblue" style="width: 100%;"
                                        required>
                                        <option disabled selected>Pilih Rute</option>
                                    </select>
                                    @error('rute_akhir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Date and time:</label>
                                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                        @php
                                            $departureParts = explode(' - ', $rute->departure);
                                            $newDate = date('Y-m-d H:i', strtotime($departureParts[1] . ' ' . $departureParts[0]));
                                        @endphp
                                        <input type="text"
                                            class="form-control datetimepicker-input @error('departure') is-invalid @enderror"
                                            name="departure" data-target="#reservationdatetime"
                                            min="{{ date('Y-m-d 00:00') }}" id="departureInput"
                                            data-old="{{ old('departure', $newDate) }}" />
                                        <div class="input-group-append" data-target="#reservationdatetime"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                        @error('departure')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputHarga">Harga</label>
                                    <input type="text" id="inputHarga" name="harga"
                                        class="form-control @error('harga') is-invalid @enderror"
                                        value="{{ old('harga', $rute->harga) }}">
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

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"
        integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        const selectRuteAndSetSelected = (select, ruteSelectId) => {
            const selectedCity = select.val();
            if (selectedCity) {
                selectRute(select, ruteSelectId);

                const ruteSelect = $(ruteSelectId);
                const selectedRute = ruteSelect.data(`rute${ruteSelectId === '#ruteAwal' ? '-awal' : '-akhir'}`);
                if (selectedRute) {
                    ruteSelect.find(`option[value="${selectedRute}"]`).prop('selected', true);
                }
            }
        };

        const selectRute = (select, destination) => {
            let terminals = $(select).find('option:selected').data('terminals');
            $(destination).html(`<option disabled selected>Pilih Rute</option>`).append(terminals.map(terminal =>
                        `<option value="${terminal.name}">${terminal.name}</option>`)
                    .join(''))
                .focus();
        }

        $(function() {
            $('.select2').select2()
            $('#inputHarga').maskMoney({
                thousands: '.',
                decimal: ',',
                precision: 0,
                allowZero: false,
                allowNegative: false,
            });

            selectRuteAndSetSelected($('[name="asal"]'), '#ruteAwal');
            selectRuteAndSetSelected($('[name="tujuan"]'), '#ruteAkhir');

            // Date and time picker
            let minDate = new Date();
            minDate.setHours(0, 0, 0, 0);

            let oldDeparture = $('#departureInput').data('old');
            $('#reservationdatetime').datetimepicker({
                theme: 'bootstrap4',
                icons: {
                    time: 'far fa-clock'
                },
                minDate,
                format: 'YYYY-MM-DD HH:mm',
                defaultDate: oldDeparture || null
            });
        })
    </script>
@endpush
