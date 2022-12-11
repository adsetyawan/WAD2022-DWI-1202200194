<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Showroom' }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="{{ route('cars.index') }}">My Car</a>
                        </li>
                    @endauth
                </ul>
                <ul class="navbar-nav">
                    @auth

                        <li class="nav-item mr-3">
                            <a class="btn btn-light text-dark" href="{{ route('cars.create') }}"">Add Car</a>
                        </li>
                        <li class="nav-item dropdown ml-5 pl-4">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                                <li><a class="dropdown-item" onclick="document.getElementById('formLogout').submit()"
                                        href="javascript:void(0)">Logout</a></li>
                                <form action="{{ route('logout') }}" method="post" id="formLogout">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="{{ route('login') }}">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>

        </div>
    </nav>

    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
    @if (session('success'))
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">

                <strong class="me-auto">Berhasil!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
    </div>
    @else
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">

                <strong class="me-auto">Gagal!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('error') }}
            </div>
        </div>
    </div>
    @endif

    @if (session('success') || session('error'))
    <script>
        $(document).ready(function() {
            $('.toast').toast('show');
        });
    </script>
    @endif
</body>

</html>
