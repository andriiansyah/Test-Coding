<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class MahasiswaDaftarController extends Controller
{
    public function index()
    {
        $data = Pendaftaran::all();
        return view('dashboard.page.mahasiswadaftar.mahasiswadaftar', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = Pendaftaran::where('id', $id)->first();
        return view('dashboard.page.mahasiswadaftar.detail', ['data' => $data]);
    }
}
