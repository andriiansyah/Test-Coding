<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use App\Models\Pendaftaran;
use App\Models\ProgramStudi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function __construct()
    {
        // dd($email);
        // $data = Pendaftaran::where('email', Auth::user()->email)->first();
        // if($data) {
        //     dd('ada data');
        // }
    }
    public function create($email)
    {
        $data = Pendaftaran::where('email', $email)->first();
        if($data) {
            return redirect(Route('profile.edit', $email));
        }
        $data['user'] = User::where('email', $email)->first();
        $data['kampus'] = Kampus::all();
        $data['program'] = ProgramStudi::all();
        return view('dashboard.page.pendaftaran.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'email' => ['required'],
        //     'nama_lengkap' => ['required'],
        //     'jenis_kelamin' => ['required'],
        //     'tgl_lahir' => ['required'],
        //     'agama' => ['required'],
        //     'pendidikan_terakhir' => ['required'],
        //     'lokasi_kampus' => ['required'],
        //     'program_studi' => ['required'],
        //     'ktp' => ['required'],
        //     'ijazah' => ['required'],
        // ]);

        // dd($request->ktp);
        // $imageNameKtp = time().'.'.$request->ktp->extension();  
        // $imageNameIjazah = time().'.'.$request->ijazah->extension();
     
        // $request->ktp->move(public_path('assets/images'), $imageNameKtp);
        // $request->ijazah->move(public_path('assets/images'), $imageNameIjazah);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('ktp');
		$namaKtp = time()."_".$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'assets/images';
		$file->move($tujuan_upload,$namaKtp);

        $file2 = $request->file('ijazah');
 
		$namaIjazah = time()."_".$file2->getClientOriginalName();

        $file2->move($tujuan_upload,$namaIjazah);

        Pendaftaran::create([
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'lokasi_kampus' => $request->lokasi_kampus,
            'program_studi' => $request->program_studi,
            'ktp' => $namaKtp,
            'ijazah' => $namaIjazah,
        ]);

        return redirect(Route('profile.edit', $request->email));
    }

}
