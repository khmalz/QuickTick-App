@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-2">
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Petugas</span>
                                <span class="info-box-number">1</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-ticket-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Tiket Belum Verifikasi</span>
                                <span class="info-box-number">
                                    14
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-bus-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Bis</span>
                                <span class="info-box-number">
                                    42
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>
                </div>
            </div>
        </section>
    </div>
@endsection
