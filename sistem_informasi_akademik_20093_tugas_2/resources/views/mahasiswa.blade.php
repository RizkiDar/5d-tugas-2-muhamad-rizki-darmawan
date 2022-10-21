@extends('master')
@section('title','Mahasiswa')
@section('page_active1','active')
@section('page_title','Daftar Mahasiswa Kelas 5D')
@section('data')

<ol class="list-group list-group-numbered">
    @foreach ($mahasiswa as $mhs)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="ms-2 me-auto">
          <div class="fw-bold">{{ $mhs }}</div>
        </div>
        <span class="badge bg-primary rounded-pill">Aktif</span>
      </li>
    @endforeach
</ol>

@endsection