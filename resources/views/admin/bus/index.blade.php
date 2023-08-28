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
                        <h1>Bus</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bus</h3>

                    <div class="card-tools">
                        <a class="btn btn-success" href="{{ route('bus.create') }}">
                            <i class="fas fa-plus">
                            </i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="busTable" class="table-bordered table-striped table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Perusahaan</th>
                                <th>Kode</th>
                                <th>Name</th>
                                <th>Seat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buses as $bus)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $bus->company->name }}</td>
                                    <td>{{ $bus->kode }}</td>
                                    <td> {{ $bus->name }}</td>
                                    <td>{{ $bus->seat }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ route('bus.edit', $bus->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#modalDelete{{ $bus->id }}">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="modalDelete{{ $bus->id }}" tabindex="-1"
                                    aria-labelledby="modalDeleteLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalDeleteLabel">Apakah Kamu Yakin?</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <form action="{{ route('bus.destroy', $bus->id) }}" method="POST"
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
        $("#busTable").DataTable({
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
                        doc.content[0].text = "QuickTick Bus";
                    },
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5] // Hanya kolom yang akan diexport
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
        }).buttons().container().appendTo('#busTable_wrapper .col-md-6:eq(0)');

        function showToastr(message) {
            toastr.success(message)
        }

        let successMessage = document.querySelector('.content-wrapper').dataset.success;
        if (successMessage) showToastr(successMessage);
    </script>
@endpush
