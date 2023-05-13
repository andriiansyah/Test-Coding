<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'unique:users', 'email'],
            'password' => 'required',
            'nama_lengkap' => 'required'
        ]);

        User::create([
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'password' => Hash::make($request->password),
            'role' => 2,
        ]);

        session()->flash('success', 'Selamat anda berhasil Registrasi User');

        return redirect('/');
    }
}
