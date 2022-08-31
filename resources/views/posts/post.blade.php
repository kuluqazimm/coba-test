
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">

            <h1 class="mb-3">{{ ucwords($read->title) }}</h1>
            
            <p>by <a href="/blog?author={{$read->author->username}}">{{$read->author->name}}</a> on <a href="/blog?kategori={{ $read->kategori->slug }}">{{ ucwords($read->kategori->name) }}</a></p>
            <div style="max-height: 350px; overflow: hidden">
                @if ($read->fimage)
                <img src="{{ asset('storage/'.$read->fimage )}}" alt="{{ $read->kategori->name}}">               
            </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $read->kategori->name }}" alt="{{ $read->kategori->name}}" class="img-fluid">
                @endif
            <article class="my-3 fs-5">
                    {!! $read->body !!}{{-- supaya html special chars bisa muncul --}}
            </article>
            <a href="/blog">Back to Post</a>
        </div>
    </div>
</div>

@endsection