@component('mail::message')
    # Ada pesan baru dari Contact Us

    Nama: {{ $name }}

    Email: {{ $email }}

    Pesan:

    {{ $message }}
@endcomponent
