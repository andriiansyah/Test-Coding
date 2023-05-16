@extends('dashboard._base.layout')

@section('content')
    <h1>Mahasiswa Daftar</h1>
    @if(session()->has('success'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    {{-- <a href="{{ route('program.create') }}" class="btn btn-primary mb-2">+ Tambah data</a> --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Pendidikan Terakhir</th>
                            <th scope="col">Lokasi Kampus</th>
                            <th scope="col">Program Studi</th>
                            <th scope="col">KTP</th>
                            <th scope="col">Ijazah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Pendidikan Terakhir</th>
                            <th scope="col">Lokasi Kampus</th>
                            <th scope="col">Program Studi</th>
                            <th scope="col">KTP</th>
                            <th scope="col">Ijazah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($data as $res)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $res->email }}</td>
                                <td>{{ $res->nama_lengkap }}</td>
                                <td>{{ $res->jenis_kelamin }}</td>
                                <td>{{ $res->tgl_lahir }}</td>
                                <td>{{ $res->agama }}</td>
                                <td>{{ $res->alamat }}</td>
                                <td>{{ $res->pendidikan_terakhir }}</td>
                                <td>{{ $res->lokasi_kampus }}</td>
                                <td>{{ $res->program_studi }}</td>
                                <td><img src="{{ asset('assets/images/' . $res->ktp) }}" width="100" alt="Gambar"></td>
                                <td><img src="{{ asset('assets/images/' . $res->ijazah) }}" width="100" alt="Gambar"></td>
                                <td>
                                    <a href="{{ Route('mahasiswadaftar.edit', $res->id) }}" class="btn btn-primary">Detail</a>
                                    {{-- <form action="{{ Route('program.destroy', $res->id) }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@stop