@extends('dashboard._base.layout')

@section('content')
    <h1>Edit User</h1>
    @if(session()->has('failed'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('failed') }}
        </div>
    @endif
    <div class="card p-3">
        <form action="{{ Route('user.update', $data->id) }}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') ?? $data->email }}" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $data->nama_lengkap }}" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" class="form-control">
                    <option value="1" @if($data->role == 1) selected @endif> 1 </option>
                    <option value="2" @if($data->role == 2) selected @endif> 2 </option>
                </select>
            </div>
            <button class="btn btn-primary">Edit</button>
        </form>
    </div>
    
@endsection