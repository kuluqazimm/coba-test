@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Post</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Judul</label>
          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" required autofocus>
          @error('title')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug') }}" readonly>
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori_id" class="form-select">
                @foreach ($kategoris as $ktgr)
                @if (old('kategori_id') == $ktgr->id)
                    <option value="{{ $ktgr->id }}" selected>{{ $ktgr->name }}</option>
                @else
                    <option value="{{ $ktgr->id }}">{{ $ktgr->name }}</option>                
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fimage" class="form-label">Upload Gambar</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input type="file" class="form-control @error('fimage') is-invalid @enderror" name="fimage" id="fimage" onchange="previewImage()">
            @error('fimage')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
            @error('body')
                <p class="text-danger">
                    {{$message }}
                </p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Buat Post</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function (){
        fetch("/dashboard/checkSlug?title=" + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage(){
        const image = document.querySelector('#fimage');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(fimage.files[0]);

        oFReader.onload = function  (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection