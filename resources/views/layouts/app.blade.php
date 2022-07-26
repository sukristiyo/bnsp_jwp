<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://kampusmerdeka.kemdikbud.go.id/static/media/logo-pendidikan.92aef756.webp" alt="" class="me-2">
                    <img src="https://kampusmerdeka.kemdikbud.go.id/static/media/logo-white.d216d864.webp" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ms-auto">
                    @auth
                      @role('admin')
                        <li class="nav-item me-4">
                            <a href="{{ route('admin.registration-list') }}" class="nav-link">Pendaftar</a>
                        </li>
                        @else
                         <li class="nav-item me-4">
                            <a href="{{ route('user.register-mbkm') }}" class="nav-link">Pendaftaran MBKM</a>
                        </li>
                        <li class="nav-item me-4">
                            <a href="{{ route('user.index-register-mbkm') }}" class="nav-link">Program</a>
                         </li>
                        @endrole
                       
                     <li class="nav-item me-4">
                        <form action="{{ route("logout") }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-light rounded-pill" >
                               Logout</button>
                        </form>
                    </li>
                    <span class="navbar-text">
                       Selamat datang,{{ auth()->user()->name }}!
                      </span>
                    @endauth

                    @guest
                    <li class="nav-item">
                        <button type="button" class="btn btn-light rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-person me-2 " ></i>Masuk</button>
                    </li>
                    @endguest
                   </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>

        <div class="footer bg-dark text-white text-center fixed-bottom py-3">
            <span class="align-self-center">Copyright© 2022 W2SDEV</span>
        </div>
    </div>

    
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header"> 
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-7 d-flex justify-content-end">
                            <h5 class="modal-title fw-bold" id="exampleModalLabel" >Masuk</h5>
                        </div>
                        <div class="col-5 d-flex justify-content-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Alamat email</label>
                  <input type="text" name="email" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Kata Sandi</label>
                  <input type="password" name="password"  class="form-control" id="recipient-name" >
                </div>
            </div>
            <div class="modal-footer">
                <div class="container mb-5">
                    <div class="row px-5">
                        <button type="submit" class="btn-orange">Masuk</button>
                    </div>
                    .
                    <div class="row mt-1 text-center" >
                        <span> Belum Punya Akun ? <a href="{{ route('register') }}"  class="custom-link">Daftar</a></span>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      </form>
      @include('sweetalert::alert')
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
      @stack('script')
</body>
</html>
