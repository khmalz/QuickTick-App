@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper" data-success="{{ session('success') }}">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Perusahaan</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Perusahaan</h3>

                    <div class="card-tools">
                        <a class="btn btn-success" href="{{ route('company.create') }}">
                            <i class="fas fa-plus">
                            </i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table-striped projects table">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    No
                                </th>
                                <th style="width: 30%">
                                    Name
                                </th>
                                <th style="width: 30%">
                                    Logo
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $company->name }}
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="{{ $company->name }}" class="table-avatar rounded-0"
                                                    style="width: 7rem !important"
                                                    src="{{ $company->logo !== 'placeholder' ? \Illuminate\Support\Facades\Storage::url($company->logo) : asset('admin/dist/img/placeholder.jpg') }}">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('company.edit', $company->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#modalDelete{{ $company->id }}">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="modalDelete{{ $company->id }}" tabindex="-1"
                                    aria-labelledby="modalDeleteLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalDeleteLabel">Apakah Kamu Yakin?</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <form action="{{ route('company.destroy', $company->id) }}" method="POST"
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
    <script>
        function showToastr(message) {
            toastr.success(message)
        }

        let successMessage = document.querySelector('.content-wrapper').dataset.success;
        if (successMessage) showToastr(successMessage);
    </script>
@endpush
