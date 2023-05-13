@extends('cms._base.layout')

@section('content')
    <h1>Edit Product</h1>
    <div class="card p-3">
        <form action="{{ Route('cms.product.update', $data['show']->id) }}" method="post">
            @method('put')
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="category_id">Category Id</label>
                    <select id="category_id" name="category_id" class="form-control">
                        <option selected>Choose...</option>
                        @foreach($data["category"] as $res)
                            <option value="{{ $res->id }}" @if($res->id == $data['show']->category_id) selected @endif>
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
                            <option value="{{ $res->id }}" @if($res->id == $data['show']->brand_id) selected @endif>
                                {{ $res->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') ?? $data['show']->name }}" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $data['show']->price }}" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" name="image" value="{{ $data['show']->image }}" id="image">
            </div>
            <button>adad</button>
        </form>
    </div>
    
@endsection