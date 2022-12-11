@extends('auth.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6"
                style="background-image: url({{ asset('image/header_login.png') }});height:100vh;background-repeat:no-repeat;background-size:cover;background-position: center; ">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 align-self-center">
                <div class="card bg-white border-0">
                    <div class="card-body">
                        <h2 class="mb-4">Login</h2>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class='form-group mb-3'>
                                <label for='email' class='mb-2'>Email</label>
                                <input type='text' name='email'
                                    class='form-control @error('email') is-invalid @enderror' value='{{ old('email') }}'>
                                @error('email')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='password' class='mb-2'>Password</label>
                                <input type='password' name='password'
                                    class='form-control @error('password') is-invalid @enderror'
                                    value='{{ old('password') }}'>
                                @error('password')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" id="remember" name="rememberme">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>

                            <div class="form-group mb-3">
                                <button class="btn mt-2 btn-primary px-4">Login</button>
                            </div>
                        </form>
                        <p>Anda Belum Punya Akun? <a href="{{ route('register') }}">Daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
