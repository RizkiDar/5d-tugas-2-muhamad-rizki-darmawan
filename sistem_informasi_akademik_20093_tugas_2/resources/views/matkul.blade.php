@extends('master')
@section('title','Mata Kuliah')
@section('page_active3','active')
@section('page_title','Daftar Mata Kuliah Kelas 5D')
@section('data')

<ol class="list-group list-group-numbered">
    @foreach ($matkul as $mk)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="ms-2 me-auto">
          <div class="fw-bold">{{ $mk }}</div>
        </div>
        <span class="badge bg-primary rounded-pill">2 SKS</span>
      </li>
    @endforeach
</ol>

@endsection