<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($data)) {
            return redirect('/dashboard')->with('success', 'Selamat anda berhasil Login!');
        }

        // $user = User::whereEmail($request->email)->first();
        // if($user) {
        //     if(Hash::check($request->password, $user->password)) {
        //         // dd($user);
        //         // if($user->role == 1) {
        //         //     dd("session admin");
        //         // } else if($user->role == 2) {
        //         //     dd("session user");
        //         // }
        //         return redirect('/dashboard')->with('success', 'Selamat anda berhasil Login!');
        //     }
        // }

        throw ValidationValidationException::withMessages([
            'email' => 'Email atau password salah',
        ]);
    }
}
