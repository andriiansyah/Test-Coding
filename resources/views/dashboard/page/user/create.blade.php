@extends('dashboard._base.layout')

@section('content')
    <h1>Add new User</h1>
    <div class="card p-3">
        @if($errors->all())
            <div class="alert alert-danger">
                Your data was invalid
            </div>
        @endif
        <form action="{{ route('user.store') }}" method="post">
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
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Nama Lengkap">
                @error('nama_lengkap')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="role">Role</label>
                    <select id="role" name="role" class="form-control">
                        {{-- <option selected value="no_choose">Choose...</option> --}}
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection