<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function index()
    {
        $data = Kampus::all();
        return view('dashboard.page.kampus.kampus', ['data' => $data]);
    }

    public function create()
    {
        return view('dashboard.page.kampus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kampus' => ['required'],
            'lokasi' => 'required',
        ]);

        Kampus::create([
            'nama_kampus' => $request->nama_kampus,
            'lokasi' => $request->lokasi,
        ]);

        return redirect(route('kampus'));
    }

    public function edit($id)
    {
        $data = Kampus::where('id', $id)->first();
        return view('dashboard.page.kampus.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kampus' => ['required'],
            'lokasi' => 'required',
        ]);

        $data = Kampus::find($id);
        
        // dd($data->email);
        $data->nama_kampus = $request->nama_kampus;
        $data->lokasi = $request->lokasi;
        $data->save();
        return redirect(route('kampus'));
    }

    public function destroy($id)
    {
        Kampus::destroy($id);

        session()->flash('success', 'Anda berhasil mendelete Data');
        return redirect(route('kampus'));
    }
}
