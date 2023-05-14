@extends('dashboard._base.layout')

@section('content')
    <h1>Edit Program Studi</h1>
    @if(session()->has('failed'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('failed') }}
        </div>
    @endif
    <div class="card p-3">
        <form action="{{ Route('program.update', $data->id) }}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}" placeholder="Nama Program Studi">
            </div>
            <button class="btn btn-primary">Edit</button>
        </form>
    </div>
    
@endsection