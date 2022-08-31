{{-- untuk memanggil view parent tadi --}}
@extends('layouts.main') 


@section('container') {{-- memanggil yield --}}
<h1 class="mb-3">Tentang Saya</h1>
<div class="row">
  <div class="col-md-8">
      <div class="card" style="background-color: #063851">
        <div class="d-flex">
          <img src="img/thenew.png" width="180">
            <div class="card-body">
              <h5 class="text-white card-title">{{ $name }}</h5>
              <p class="text-white card-text">Email  {{ $email }}</p>
              <p class="text-white card-text">Calon seorang {{ $fokus }}</p>
            </div>    
        </div>
    </div>
  </div>
</div>
@endsection

