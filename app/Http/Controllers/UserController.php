<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('dashboard.page.user.user', ['data' => $data]);
    }

    public function create()
    {
        return view('dashboard.page.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'unique:users', 'email'],
            'password' => 'required',
            'nama_lengkap' => 'required',
            'role' => 'required'
        ]);

        User::create([
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect(route('user'));
    }

    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        return view('dashboard.page.user.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
            'nama_lengkap' => 'required',
            'role' => 'required'
        ]);
        // dd('succes');

        $dataAll = User::all();
        $data = User::find($id);
        // dd($dataAll);
        foreach($dataAll as $val) {
            if($val->email == $request->email) {
                if($val->email == $data->email) {

                }else {
                    session()->flash('failed', 'Email sudah ada yang menggunakan');
                    return redirect('/user/'. $id . '/edit');
                }
            }
        }
        
        // dd($data->email);
        $data->email = $request->email;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->password = Hash::make($request->password);
        $data->role = $request->role;
        $data->save();
        return redirect(route('user'));
    }

    public function destroy($id)
    {
        User::destroy($id);

        session()->flash('success', 'Anda berhasil mendelete Data');
        return redirect(route('user'));
    }
}
