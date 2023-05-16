@extends('dashboard._base.layout')

@section('content')
    <h1>Detail Mahasiswa Daftar</h1>
    @if(session()->has('failed'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('failed') }}
        </div>
    @endif
    <div class="card p-3">
        <form action="" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $data->email }}" disabled>
            </div>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $data->nama_lengkap }}" disabled>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="{{ $data->jenis_kelamin }}" disabled>
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{ $data->tgl_lahir }}" disabled>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" name="agama" id="agama" value="{{ $data->agama }}" disabled>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $data->alamat }}" disabled>
            </div>
            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" value="{{ $data->pendidikan_terakhir }}" disabled>
            </div>
            <div class="form-group">
                <label for="lokasi_kampus">Lokasi Kampus</label>
                <input type="text" class="form-control" name="lokasi_kampus" id="lokasi_kampus" value="{{ $data->lokasi_kampus }}" disabled>
            </div>
            <div class="form-group">
                <label for="program_studi">Program Studi</label>
                <input type="text" class="form-control" name="program_studi" id="program_studi" value="{{ $data->program_studi }}" disabled>
            </div>
            <div class="form-group">
                <label for="ktp">KTP</label> <br>
                <img src="{{ asset('assets/images/' . $data->ktp) }}" width="500" alt="Gambar">
                {{-- <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $data->nama_lengkap }}" disable> --}}
            </div>
            <div class="form-group">
                <label for="ijazah">Ijazah</label> <br>
                <img src="{{ asset('assets/images/' . $data->ijazah) }}" width="500" alt="Gambar">
                {{-- <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $data->nama_lengkap }}" disable> --}}
            </div>
            
            {{-- <button class="btn btn-primary">Edit</button> --}}
        </form>
    </div>
    
@endsection