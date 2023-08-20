@extends('layouts.main')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pesan</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Pesan</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Pesan Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-8 entries">
                        <div class="entry" id="form-kontak">
                            <h2 class="entry-title fs-4 d-md-flex d-block justify-content-between">
                                <p>Detail Kontak (Untuk Tiket)</p>
                                <a href="{{ route('profile.edit') }}"
                                    class="btn btn-info text-info border-0 bg-transparent p-0">Edit
                                    Kontak</a>
                            </h2>
                            <div class="entry-content">
                                <div class="mb-3">
                                    <label for="fullName" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" disabled id="fullName"
                                        value="{{ $order->passenger->user->name }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Nomer Telepon</label>
                                            <input type="tel" disabled class="form-control" id="phone"
                                                value="{{ $order->passenger->telephone }}">
                                            <small>
                                                <div id="phoneHelpBlock" class="form-text">
                                                    contoh 628712738122
                                                </div>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" disabled class="form-control" id="email"
                                                value="{{ $order->passenger->user->email }}">
                                            <small>
                                                <div id="emailHelpBlock" class="form-text">
                                                    contoh email@example.com
                                                </div>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('tiket.update', $order->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="entry" id="form-penumpang">
                                <h2 class="entry-title fs-4">
                                    <p>Detail Penumpang</p>
                                </h2>
                                <div id="deleted-id-input" hidden></div>
                                @foreach ($order->passengerOrders as $passenger)
                                    <div id="passenger-{{ $passenger->id }}" class="passenger-container"
                                        data-passenger-id="{{ $passenger->id }}">
                                        <div class="entry-meta">
                                            <ul class="d-flex justify-content-between align-items-center">
                                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>Orang
                                                        {{ $loop->iteration }}</a>
                                                </li>
                                                <li class="d-flex align-items-center text-dark">
                                                    <input type="checkbox" hidden id="deleted-{{ $passenger->id }}"
                                                        class="delete-passenger">
                                                    <label for="deleted-{{ $passenger->id }}"
                                                        class="text-dark">Delete</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry-content passenger-content">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control"
                                                    id="fullName{{ $passenger->id }}"
                                                    value="{{ old('name', $passenger->passenger_name) }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ktp" class="form-label">Nomer KTP</label>
                                                <input type="number" class="form-control" id="ktp{{ $passenger->id }}"
                                                    value="{{ old('ktp', $passenger->passenger_ktp) }}">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-warning text-white" type="submit"
                                    onclick="return confirm('apakah sudah yakin?')">Save</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-item categories mb-2">
                                <p class="fw-semibold">{{ $order->rute->rute_awal }} ({{ $order->rute->asal }}) <i
                                        class="bi bi-arrow-right"></i> {{ $order->rute->rute_akhir }}
                                    ({{ $order->rute->tujuan }})
                                </p>
                                <small>
                                    <p>{{ $order->rute->bus->kode }} ({{ $order->rute->bus->name }})</p>
                                </small>
                            </div>
                            <div class="sidebar-item tags">
                                <p>{{ $order->rute->departure }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.delete-passenger').on('change', function() {
                let parent = $(this).closest('.passenger-container');
                let id = parent.data('passenger-id');
                let deletedInput = $(`#deletedID-${id}`);

                if (!this.checked) { // checkbox is unchecked
                    if (deletedInput.length) {
                        deletedInput.remove();
                        parent.find(`#fullName${id}, #ktp${id}`).removeClass('border-danger text-muted')
                            .prop('disabled', false);
                    }
                } else { // checkbox is checked
                    if (!deletedInput.length) {
                        let input =
                            `<input type="text" name="delete[]" id="deletedID-${id}" class="deleted-id" value="${id}" readonly>`;
                        $('#deleted-id-input').append(input);
                        parent.find(`#fullName${id}, #ktp${id}`).addClass('border-danger text-muted').prop(
                            'disabled', true);
                    }
                }
            })

            $(".passenger-content input").on("change", function() {
                let passengerId = $(this).closest('.passenger-container').data('passenger-id');
                let inputName = $(`#fullName${passengerId}`);
                let inputKtp = $(`#ktp${passengerId}`);

                inputName.attr('name', `edit[${passengerId}][name]`);
                inputKtp.attr('name', `edit[${passengerId}][ktp]`);
            });
        })
    </script>
@endpush
