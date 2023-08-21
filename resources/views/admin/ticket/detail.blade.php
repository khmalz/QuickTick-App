@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mb-4">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ticket</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="invoice mb-3 p-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        @if ($order->status == 'unverified')
                                            <span class="btn btn-sm btn-outline-danger"
                                                style="cursor: default">Unverified</span>
                                        @else
                                            <span class="btn btn-sm btn-outline-success"
                                                style="cursor: default">Verified</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            {{ $order->rute->asal }} <i class="fas fa-long-arrow-alt-right mx-1"></i>
                                            {{ $order->rute->tujuan }}
                                            <small class="float-right">{{ $order->rute->departure }}</small>
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        From
                                        <address>
                                            <strong>{{ $order->rute->asal }}</strong><br>
                                            {{ $order->rute->rute_awal }}<br>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        To
                                        <address>
                                            <strong>{{ $order->rute->tujuan }}</strong><br>
                                            {{ $order->rute->rute_akhir }}<br>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        <b>{{ $order->rute->bus->kode }}</b><br>
                                        <br>
                                        <b>Company:</b> {{ $order->rute->bus->company->name }}<br>
                                        <b>Bus:</b> {{ $order->rute->bus->name }}<br>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <p class="lead">Payment Method:</p>
                                        @if ($order->payment)
                                            @if ($order->payment->method == 'wallet')
                                                <p class="lead text-capitalize">{{ $order->payment->wallet->wallet }}</p>

                                                <p class="text-muted well well-sm shadow-none">
                                                    No. {{ $order->payment->wallet->number }}
                                                </p>
                                            @endif
                                            @if ($order->payment->method == 'card')
                                                <p class="lead text-capitalize">Debit/Credit Card</p>

                                                <p class="text-muted well well-sm shadow-none">
                                                    Name {{ $order->payment->card->name }}
                                                </p>
                                                <p class="text-muted well well-sm shadow-none">
                                                    No. {{ $order->payment->card->number }}
                                                </p>
                                            @endif
                                            @if ($order->payment->method == 'va')
                                                <p class="lead text-capitalize">Virtual Account</p>
                                            @endif
                                        @else
                                            <p class="lead text-danger fs-1"><strong>Belum
                                                    Bayar</strong></p>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <p class="lead">Harga</p>

                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>Rp{{ $order->rute->harga }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                @if ($order->status == 'unverified')
                                    <div class="row no-print">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                                data-target="#modalVerif" style="margin-right: 5px;">
                                                <i class="fas fa-check"></i>
                                                Verification
                                            </button>
                                        </div>
                                    </div>
                                @else
                                    <div class="row no-print">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-danger float-right" data-toggle="modal"
                                                data-target="#modalUnverif" style="margin-right: 5px;">
                                                <i class="fas fa-check"></i>
                                                Unverification
                                            </button>
                                        </div>
                                    </div>
                                @endif

                                <div class="modal fade" id="modalUnverif" tabindex="-1" aria-labelledby="modalUnverifLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalUnverifLabel">Apakah Yakin Untuk
                                                    Unverifikasi?
                                                </h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <form action="{{ route('ticket.update', $order->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('patch')
                                                    <input type="hidden" name="status" value="unverified">
                                                    <button type="submit" class="btn btn-primary">Yes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="modalVerif" tabindex="-1" aria-labelledby="modalVerifLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalVerifLabel">Apakah Yakin Untuk Verifikasi?
                                                </h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <form action="{{ route('ticket.update', $order->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('patch')
                                                    <input type="hidden" name="status" value="verified">
                                                    <button type="submit" class="btn btn-primary">Yes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
