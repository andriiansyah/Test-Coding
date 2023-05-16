<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data['count'] = User::all()->count();
        // dd(Auth::user()->email);
        $data['check'] = Pendaftaran::where('email', Auth::user()->email)->first();
        // dd($data['check']);
        // dd($data);
        return view("dashboard.page.dashboard.dashboard", ['data' => $data]);
    }
}
