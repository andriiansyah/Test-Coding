@extends('dashboard._base.layout')

@section('content')
    <h1>Kampus</h1>
    @if(session()->has('success'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    <a href="{{ route('kampus.create') }}" class="btn btn-primary mb-2">+ Tambah data</a>

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
                            <th scope="col">Nama Kampus</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kampus</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($data as $res)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $res->nama_kampus }}</td>
                                <td>{{ $res->lokasi }}</td>
                                <td>
                                    <a href="{{ Route('kampus.edit', $res->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ Route('kampus.destroy', $res->id) }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
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