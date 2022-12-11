@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <h1>{{ $car->name }}</h1>
            <p>Detail Mobil {{ $car->name }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ $car->image() }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
           <form action="#" method="post" enctype="multipart/form-data">
           <div class="form-group mb-3">
                <label class="mb-2" for="name">Name</label>
                <input type="text" class="form-control" placeholder="Name" id="name" name="name" required readonly value="{{ $car->name }}">
            </div>
            <div class="form-group mb-3">
                <label class="mb-2" for="owner">Owner</label>
                <input type="text" class="form-control" placeholder="Nama Pemilik" id="owner" name="owner" required readonly value="{{ $car->owner }}">
            </div>
            <div class="form-group mb-3">
                <label class="mb-2" for="brand">Brand</label>
                <input type="text" class="form-control" placeholder="Merk" id="brand" name="brand" required readonly value="{{ $car->brand }}">
            </div>
            <div class="form-group mb-3">
                <label class="mb-2" for="purchase_date">Purchase Date</label>
                <input type="date" class="form-control" placeholder="Nama Pemilik" id="purchase_date" name="purchase_date" required readonly value="{{ $car->purchase_date->translatedFormat('Y-m-d') }}">
            </div>
            <div class="form-group mb-3">
                <label class="mb-2" for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="" readonly>{{$car->description}}</textarea>
            </div>
            <div class="form-group mb-3">
                <label class="mb-2" for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" required readonly>
            </div>
            <div class="form-group mb-3">
                <label class="mb-2" for="status_pembayaran">Status</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="lunas" value="Lunas"
                    @if($car->status === 'Lunas') checked @endif
                    >
                    <label class="form-check-label" for="lunas">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="belum_lunas" value="Belum Lunas"
                    @if($car->status === 'Belum Lunas') checked @endif
                        >
                    <label class="form-check-label" for="belum_lunas">Belum Lunas</label>
                </div>
            </div>
            <div class="form-group mb-3">
              <a href="{{ route('cars.edit',$car->id) }}" class="btn btn-primary px-4">Edit</a>
            </div>
           </form>
        </div>
    </div>
</div>
@endsection
