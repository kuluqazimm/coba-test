@extends('layouts.main')

@section('container')
    <h1 class="text-center">{{ $title }}</h1>
    
    <div class="row justify-content-center">
      <div class="col-md-6 mt-3">
        <form action="/blog">
          @if (request('kategori'))
            <input type="hidden" name="kategori" value="{{ request('kategori') }}">
          @endif
          @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
            <button class="btn btn-outline text-white" type="submit" style="background-color: rgb(6,56,81)">Search</button>
          </div>
          
        </form>
      </div>
    </div>

    @if ($posts->count())
<div class="card mb-3 mt-3">
        @if ($posts[0]->fimage)
        <img src="{{ asset('storage/'.$posts[0]->fimage) }}" class="card-img-top" style="max-height: 400px; overflow: hidden" alt="{{ $posts[0]->kategori->name }}">
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->kategori->name }}" class="card-img-top" alt="{{ $posts[0]->kategori->name }}">
        @endif
        <div class="card-body text-center">
          <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-dark">{{ $posts[0]->title }}</a></h3>
          
          <p><small class="text-muted">by <a href="/blog?author={{$posts[0]->author->username}}">{{$posts[0]->author->name}}</a> in <a href="/blog?kategori={{ $posts[0]->kategori->slug }}">{{ ucwords($posts[0]->kategori->name) }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
        </div>
      </div>
      
    <div class="container">
      <div class="row">
            @foreach ($posts->skip(1) as $item)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 fs-6" style="background-color: rgba(6,56,81,0.7)"><a href="/blog?kategori={{$item->kategori->slug}}" class="text-white">{{ $item->kategori->name }}</a></div>
                    @if ($item->fimage)
                    <img src="{{ asset('storage/'.$item->fimage) }}" style="max-height: 400px; overflow: hidden" alt="{{ $item->kategori->name }}">
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $item->kategori->name }}" class="card-img-top" alt="{{ $item->kategori->name }}">
                    @endif
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->title }}</h5>
                      <p><small class="text-muted">by <a href="/blog?author={{$item->author->username}}">{{$item->author->name}}</a> {{ $item->created_at->diffForHumans() }}</small></p>
                      <p class="card-text">{{ $item->excerpt }}</p>
                      <a href="/blog/{{ $item->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center fs-3">Post tidak ditemukan!</p>
    @endif

    <div class="d-flex justify-content-end">
      {{ $posts->links() }}
    </div>
@endsection