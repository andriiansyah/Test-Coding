<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit($email)
    {
        $data = Pendaftaran::where('email', $email)->first();
        // dd($email);
        return view('dashboard.page.profile.detail', ['data' => $data]);
    }
}
