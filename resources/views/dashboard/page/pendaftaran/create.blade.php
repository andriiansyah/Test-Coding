@extends('dashboard._base.layout')

@section('content')
    <h1>Pendaftaran</h1>
    {{-- {{ dd($data) }} --}}
    <div class="card p-3">
        {{-- @if($errors->all())
            <div class="alert alert-danger">
                Your data was invalid
            </div>
        @endif --}}
        <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="category_id">Category Id</label>
                    <select id="category_id" name="category_id" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($data["category"] as $res)
                            <option value="{{ $res->id }}">
                                {{ $res->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                    <div class="form-group col-md-6">
                    <label for="brand_id">Brand Id</label>
                    <select id="brand_id" name="brand_id" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($data["brand"] as $res)
                            <option value="{{ $res->id }}">
                                {{ $res->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div> --}}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $data['user']['email'] }}">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" value="{{ $data['user']['nama_lengkap'] }}">
                @error('nama_lengkap')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" id="jenis_kelamin1" checked>
                    <label class="form-check-label" for="jenis_kelamin1">
                        Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin2">
                    <label class="form-check-label" for="jenis_kelamin2">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="date" id="datepicker" name="tgl_lahir">
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <select id="agama" name="agama" class="form-control">
                    <option value="Islam" selected>Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat">{{ old('nama_lengkap') }}</textarea>
                @error('alamat')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                    <option value="S1" selected>S1</option>
                    <option value="SMK">SMK</option>
                    <option value="SMP">SMP</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lokasi_kampus">Lokasi Kampus</label>
                <select id="lokasi_kampus" name="lokasi_kampus" class="form-control">
                    @foreach($data["kampus"] as $res)
                        <option value="{{ $res->lokasi }}">
                            {{ $res->lokasi }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="program_studi">Lokasi Kampus</label>
                <select id="program_studi" name="program_studi" class="form-control">
                    @foreach($data["program"] as $res)
                        <option value="{{ $res->nama }}">
                            {{ $res->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="ktp">KTP</label>
                <input type="file" class="form-control @error('ktp') is-invalid @enderror" name="ktp" id="ktp">
                @error('ktp')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="ijazah">Ijazah</label>
                <input type="file" class="form-control @error('ijazah') is-invalid @enderror" name="ijazah" id="ijazah">
                @error('ijazah')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection