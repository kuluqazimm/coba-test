@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Daftar User</h1>
    <div class="container">
        <div class="row">
        @foreach ($lists as $item)
            <div class="col-md-4 mb-4">
                <a href="/blog?author={{ $item->username }}">
                <div class="card text-dark" style="width: 18rem;">
                    <img src="https://source.unsplash.com/300x400?people" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">{{ $item->name }}</p>
                            <p class="card-text">Email : {{ $item->email }}</p>
                        </div>
                </div>
                </a>
            </div>
        @endforeach
        </div>
        {{ $lists->links() }}
    </div>
@endsection