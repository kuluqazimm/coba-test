@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kategori Postingan</h1>
</div>

<div class="table-responsive">
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
        
    @endif
    <a href="/dashboard/kategoris/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Tambah Kategori</a>
    <table class="table table-hover table-striped table-lg align-middle">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategoris as $ktgr)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ktgr->name }}</td>
                <td>
                    <a href="/dashboard/kategoris/{{$ktgr->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/kategoris/{{ $ktgr->id }}" method="post" class="d-inline">
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