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
                            <tr>
                                <td>1</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Internet
                                    Explorer 5.0
                                </td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>C</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Internet
                                    Explorer 5.5
                                </td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                                <td>A</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Internet
                                    Explorer 6
                                </td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td>7</td>
                                <td>A</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>AOL browser (AOL desktop)</td>
                                <td>Win XP</td>
                                <td>6</td>
                                <td>A</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.7</td>
                                <td>A</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Firefox 3.0</td>
                                <td>Win 2k+ / OSX.3+</td>
                                <td>1.9</td>
                                <td>A</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Camino 1.0</td>
                                <td>OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Camino 1.5</td>
                                <td>OSX.3+</td>
                                <td>1.8</td>
                                <td>A</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('bus.edit', '1') }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalDelete{{ '1' }}">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
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
        }).buttons().container().appendTo('#busTable_wrapper .col-md-6:eq(0)');

        function showToastr(message) {
            toastr.success(message)
        }

        let successMessage = document.querySelector('.content-wrapper').dataset.success;
        if (successMessage) showToastr(successMessage);
    </script>
@endpush
