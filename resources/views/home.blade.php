<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('img/icons.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('/font/bootstrap-icons.css') }}">
    @yield('import_css')
    <title>BacaYuk! | Beranda</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">BacaYuk!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#">
                    <i class="bi bi-book-fill pe-1"></i>
                    Semua Buku
                </a>
              </li>
              <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-collection-fill pe-1"></i>
                  Genre
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item me-5 pe-5">
                <input class="form-control ms-3 searchbar d-inline-block" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary btn-search" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </li>
            </ul>
            <div class="d-flex">
              <a href="#" class="btn btn-outline-primary me-3 px-4">Sign Up</a>
              <a href="#" class="btn btn-primary px-4">Sign In</a>
            </div>
          </div>
      </div>
    </nav>
    <div class="container-fluid mt-5">
      <div class="row pt-5">
        <div class="col-sm-3">
          <h1>Rekomendasi <br/> BacaYuk!</h1>
          <span>Yang Sedang Hangat Di Baca</span>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
  </body>
</html>
