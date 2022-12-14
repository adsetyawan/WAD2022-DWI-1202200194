@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row header mt-5">
        <div class="col-md-6 align-self-end">
            <h1>Selamat Datang Di Showroom Port Numbay</h1>
            <p class="text-muted">Hai tanah ku Papua, Kau tanah lahirku, Ku kasih akan dikau sehingga ajalku.</p>
            <a href="" class="btn btn-primary px-4 mt-4">MyCar</a>

            <div class="row mt-4">
                <div class="col-md-3">
                    <img src="{{ asset('image/logo.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-9 align-self-center">
                    <p class="align-self-center fs-5 ml-4 mt-2 pl-5">Dwi_1202200194</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('image/header.png') }}" class="img-fluid rounded-4" alt="">
        </div>
    </div>
</div>
@endsection
