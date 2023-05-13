@extends('cms._base.layout')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('cms.product.create') }}" class="btn btn-primary mb-2">+ Tambah data</a>
    
    <div class="card">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Category Id</th>
                    <th scope="col">Brand Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($data as $res)
                    <tr>
                        <th>{{ $i }}</th>
                        <td>{{ $res->category_id }}</td>
                        <td>{{ $res->brand_id }}</td>
                        <td>{{ $res->name }}</td>
                        <td>{{ $res->price }}</td>
                        <td>{{ $res->image }}</td>
                        <td>
                            <a href="{{ Route('cms.product.edit', $res->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ Route('cms.product.destroy', $res->id) }}" method="post" class="d-inline">
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
    
@stop