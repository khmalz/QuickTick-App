@extends('admin.layouts.main')

@push('styles')
    <link rel="stylesheet"
        href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="content-wrapper" data-success="{{ session('success') }}">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Rute</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Rute</h3>

                    <div class="card-tools d-flex align-items-center" style="column-gap: 14px">
                        <div>
                            <button type="submit" data-toggle="modal" data-target="#modalForm" class="btn btn-primary"> <i
                                    class="fa fa-search"></i></button>
                        </div>
                        <a class="btn btn-success" href="{{ route('rute.create') }}">
                            <i class="fas fa-plus">
                            </i>
                            Add
                        </a>
                        <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalFormLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalFormLabel">Search</h5>
                                    </div>
                                    <form method="GET">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="dari" class="form-label">Dari:</label>
                                                <select class="custom-select" name="asal">
                                                    <option disabled selected>Pilih</option>
                                                    @foreach ($cities as $city)
                                                        <option {{ request('asal') == $city->name ? 'selected' : null }}
                                                            value="{{ $city->name }}">{{ $city->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="departureDate">Departure</label>
                                                <div class="input-group date" id="departureDate"
                                                    data-target-input="nearest">
                                                    <input type="text" name="departure"
                                                        class="form-control form-control-sm datetimepicker-input"
                                                        data-target="#departureDate" value="{{ request('departure') }}"
                                                        placeholder="Type Departure" />
                                                    <div class="input-group-append" data-target="#departureDate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{ route('rute.index') }}" class="btn btn-secondary">Clear</a>
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (count($rutes) > 0)
                    <div class="card-body">
                        <table id="ruteTable" class="table-bordered table-striped table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bus</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Harga</th>
                                    <th>Tanggal Berangkat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rutes as $rute)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $rute->bus->company->name }} - {{ $rute->bus->kode }}
                                        </td>
                                        <td>{{ $rute->asal }}</td>
                                        <td>{{ $rute->tujuan }}</td>
                                        <td>{{ $rute->harga }}</td>
                                        <td>{{ $rute->departure }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('rute.show', $rute->id) }}">
                                                <i class="fas fa-info">
                                                </i>
                                                Detail
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{ route('rute.edit', $rute->id) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#modalDelete{{ $rute->id }}">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                            </button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modalDelete{{ $rute->id }}" tabindex="-1"
                                        aria-labelledby="modalDeleteLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalDeleteLabel">Apakah Kamu Yakin?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>
                                                    <form action="{{ route('rute.destroy', $rute->id) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="card-body text-center">
                        <p>Search First!</p>
                    </div>
                @endif
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#departureDate').datetimepicker({
                format: 'YYYY-MM-DD'
            });
        })

        $("#ruteTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": [
                "excel",
                {
                    extend: 'pdf',
                    customize: function(doc) {
                        doc.content[1].table.body.forEach(function(row) {
                            row.forEach(function(cell) {
                                cell.alignment = 'center';
                            });
                            row.splice(-1, 1); // Menghapus kolom "Action"
                        });
                        doc.content[1].table.widths = Array(doc.content[1].table.body[0].length).fill('*');
                        doc.content[0].text = "QuickTick Rute";
                    },
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6] // Hanya kolom yang akan diexport
                    }
                }
            ],
            "stateSave": true,
            "stateDuration": 60 * 5,
            "language": {
                "infoEmpty": "No entries to show",
                "search": "_INPUT_",
                "searchPlaceholder": "Search...",
            },
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": -1
            }]
        }).buttons().container().appendTo('#ruteTable_wrapper .col-md-6:eq(0)');

        function showToastr(message) {
            toastr.success(message)
        }

        let successMessage = document.querySelector('.content-wrapper').dataset.success;
        if (successMessage) showToastr(successMessage);
    </script>
@endpush
