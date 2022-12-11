@extends('auth.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6" style="background-image: url({{ asset('image/header_register.png') }});height:100vh;background-repeat:no-repeat;background-size:cover;background-position: center; ">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4 align-self-center pl-5">
            <div class="card bg-white border-0">
                <div class="card-body">
                    <h2 class="mb-4">Register</h2>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="mb-2">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="mb-2">Email</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" >
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_hp" class="mb-2">Nomor Handphone</label>
                            <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}" >
                            @error('no_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="mb-2">Kata Sandi</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" >
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password_confirmation" class="mb-2">Konfirmasi Kata Sandi</label>
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" >
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn mt-2 btn-primary px-4" >Daftar</button>
                        </div>
                    </form>
                    <p>Anda Sudah Punya Akun? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
