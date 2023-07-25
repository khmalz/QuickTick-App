<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function tampilkanSession(Request $request): void
    {
        if ($request->session()->has("nama") & $request->session()->has("kelas") & $request->session()->has("alamat")) {
            echo $request->session()->get("nama") . PHP_EOL;
            echo $request->session()->get("kelas") . PHP_EOL;
            echo $request->session()->get("alamat") . PHP_EOL;
        } else {
            echo "Tidak ada data dalam session";
        }
    }

    public function buatSession(Request $request): void
    {
        $request->session()->put(["nama" => "Akmal", "kelas" => "XII RPL", "alamat" => "Jl Dermaga Raya"]);
        echo "Data telah ditambahkan ke session";
    }

    public function hapusSession(Request $request): void
    {
        $request->session()->forget(["nama", "kelas", "alamat"]);
        echo "Data telah dihapus dari session";
    }
}
