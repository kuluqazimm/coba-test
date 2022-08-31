@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Postingan Saya</h1>
</div>

<div class="table-responsive">
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
        
    @endif
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Tambah</a>
    <table class="table table-hover table-striped table-lg align-middle">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $usrpst)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $usrpst->title }}</td>
                <td>{{ $usrpst->kategori->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $usrpst->slug }}" class="badge bg-secondary"><span data-feather="eye"></span></a>
                    <a href="/dashboard/posts/{{$usrpst->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/posts/{{ $usrpst->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                            <span data-feather="trash"></span>
                        </button>
                    </form>
            </td>
            </tr>
                
            @endforeach
            </tbody>
          </table>
</div>
@endsection