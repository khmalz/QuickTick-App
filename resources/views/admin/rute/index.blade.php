@extends('admin.layouts.main')

@push('styles')
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

                    <div class="card-tools">
                        <a class="btn btn-success" href="{{ route('rute.create') }}">
                            <i class="fas fa-plus">
                            </i>
                            Add
                        </a>
                    </div>
                </div>
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
                                    <td>{{ $rute->departure->format('d F Y H:i') }}</td>
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
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@push('scripts')
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
        $("#ruteTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf"],
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
