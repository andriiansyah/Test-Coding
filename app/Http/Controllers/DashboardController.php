<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = User::all()->count();
        // dd($data);
        return view("dashboard.page.dashboard.dashboard", ['data' => $data]);
    }
}
