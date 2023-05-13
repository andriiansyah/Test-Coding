@extends('dashboard._base.layout')

@section('content')

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <h2>Halaman Dashboard</h2>

    @if(Auth::check())
        {{-- {{ dd(Auth::user()->role) }} --}}
        @if(Auth::user()->role == 1)
            Admin
        @else
            User
        @endif
    @endif

    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Total Mahasiswa Yang Terdaftar.</h5>
            <h1 class="card-text text-center">20</h1>
        </div>
    </div>

@endsection