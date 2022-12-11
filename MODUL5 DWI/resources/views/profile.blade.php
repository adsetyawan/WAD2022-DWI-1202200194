@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="text-center">Profile</h2>
                        <form action="{{ route('profile.update') }}" method="post">
                            @csrf
                            <div class='form-group mb-3'>
                                <label for='email' class='mb-2'>Email</label>
                                <input type='text' name='email'
                                    class='form-control @error('email') is-invalid @enderror'
                                    value='{{ auth()->user()->email ?? old('email') }}' readonly>
                                @error('email')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='name' class='mb-2'>Name</label>
                                <input type='text' name='name'
                                    class='form-control @error('name') is-invalid @enderror' value='{{ auth()->user()->name ?? old('name') }}'>
                                @error('name')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='no_hp' class='mb-2'>No. HP</label>
                                <input type='text' name='no_hp'
                                    class='form-control @error('no_hp') is-invalid @enderror'
                                    value='{{ auth()->user()->no_hp ?? old('no_hp') }}'>
                                @error('no_hp')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class='form-group mb-3'>
                                <label for='password' class='mb-2'>Kata Sandi</label>
                                <input type='password' name='password'
                                    class='form-control @error('password') is-invalid @enderror'
                                    value='{{ old('password') }}'>
                                @error('password')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='password_confirmation' class='mb-2'>Konfirmasi Kata Sandi</label>
                                <input type='password' name='password_confirmation'
                                    class='form-control @error('password_confirmation') is-invalid @enderror'
                                    value='{{ old('password_confirmation') }}'>
                                @error('password_confirmation')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <div class="text-center">
                                    <button class="btn btn-primary" name="update">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
