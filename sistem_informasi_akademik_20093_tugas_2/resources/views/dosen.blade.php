@extends('master')
@section('title','Dosen')
@section('page_active2','active')
@section('page_title','Daftar Dosen Kelas 5D')
@section('data')

<ol class="list-group list-group-numbered">
    @foreach ($dosen as $dos)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="ms-2 me-auto">
          <div class="fw-bold">{{ $dos }}</div>
        </div>
        <span class="badge bg-primary rounded-pill">Aktif</span>
      </li>
    @endforeach
</ol>

@endsection