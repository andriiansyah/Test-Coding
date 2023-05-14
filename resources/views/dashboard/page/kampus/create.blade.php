@extends('dashboard._base.layout')

@section('content')
    <h1>Add new Kampus</h1>
    <div class="card p-3">
        @if($errors->all())
            <div class="alert alert-danger">
                Your data was invalid
            </div>
        @endif
        <form action="{{ route('kampus.store') }}" method="post">
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
                <label for="nama_kampus">Nama Kampus</label>
                <input type="text" class="form-control @error('nama_kampus') is-invalid @enderror" name="nama_kampus" id="nama_kampus" value="{{ old('nama_kampus') }}" placeholder="Nama Kampus">
                @error('nama_kampus')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" id="lokasi" value="{{ old('lokasi') }}" placeholder="Lokasi">
                @error('lokasi')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection