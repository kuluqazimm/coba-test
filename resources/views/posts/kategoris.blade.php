
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Daftar Kategori</h1>

    <div class="container">
        <div class="row">
            @foreach ($kategoris as $ktgor)
            <div class="col-md-4 mb-4">
                <a href="blog?kategori={{ $ktgor->slug }}">
                <div class="card text-bg-dark border border-0">
                    <img src="https://source.unsplash.com/500x500?{{ $ktgor->name }}" class="card-img" alt="{{ $ktgor->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3 text-white" style="background-color: rgba(6,56,81,0.7)">{{ $ktgor->name }}</h5>
                    </div>
                </div>
                </a>
            </div>
                @endforeach
        </div>
    </div>
@endsection