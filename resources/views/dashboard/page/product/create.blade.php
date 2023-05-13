@extends('cms._base.layout')

@section('content')
    <h1>Add new Product</h1>
    <div class="card p-3">
        @if($errors->all())
            <div class="alert alert-danger">
                Your data was invalid
            </div>
        @endif
        <form action="{{ route('cms.product.store') }}" method="post">
            @csrf
            <div class="form-row">
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
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Name">
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}" placeholder="Price">
                @error('price')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}">
                @error('image')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <button>adad</button>
        </form>
    </div>
    
@endsection