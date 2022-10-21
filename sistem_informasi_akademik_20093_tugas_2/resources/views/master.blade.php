<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ ('assets/img/school.svg') }}"alt="" width="30" height="24" class="d-inline-block align-text-top" style="margin-right:5px; color:aliceblue">SIAKAD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link @yield('page_active1')" aria-current="page" href="/">Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('page_active2')" href="/dosen">Dosen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('page_active3')" href="/matkul">Mata Kuliah</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container">
      <div class="tabeldata">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <h2>@yield('page_title')</h2>
            @yield('data')
          </div>
        </div>
      </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>