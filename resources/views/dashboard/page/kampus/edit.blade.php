@extends('dashboard._base.layout')

@section('content')
    <h1>Edit Kampus</h1>
    @if(session()->has('failed'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('failed') }}
        </div>
    @endif
    <div class="card p-3">
        <form action="{{ Route('kampus.update', $data->id) }}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="nama_kampus">Nama Kampus</label>
                <input type="text" class="form-control" name="nama_kampus" id="nama_kampus" value="{{ $data->nama_kampus }}" placeholder="Nama Kampus">
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" name="lokasi" id="lokasi" value="{{ $data->lokasi }}" placeholder="Lokasi">
            </div>
            <button class="btn btn-primary">Edit</button>
        </form>
    </div>
    
@endsection