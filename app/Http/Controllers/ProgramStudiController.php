<?php

namespace App\Http\Controllers;

use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    public function index()
    {
        $data = ProgramStudi::all();
        return view('dashboard.page.program.program', ['data' => $data]);
    }

    public function create()
    {
        return view('dashboard.page.program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
        ]);

        ProgramStudi::create([
            'nama' => $request->nama,
        ]);

        return redirect(route('program'));
    }

    public function edit($id)
    {
        $data = ProgramStudi::where('id', $id)->first();
        return view('dashboard.page.program.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => ['required'],
        ]);

        $data = ProgramStudi::find($id);
        
        // dd($data->email);
        $data->nama = $request->nama;
        $data->save();
        return redirect(route('program'));
    }

    public function destroy($id)
    {
        ProgramStudi::destroy($id);

        session()->flash('success', 'Anda berhasil mendelete Data');
        return redirect(route('program'));
    }
}
