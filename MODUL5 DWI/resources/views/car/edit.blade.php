@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1>Edit Mobil {{ $car->name }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('cars.update',$car->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class='form-group mb-3'>
                        <label for='name' class='mb-2'>Name</label>
                        <input type='text' name='name' class='form-control @error('name') is-invalid @enderror'
                            value='{{ $car->name ?? old('name') }}'>
                        @error('name')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='owner' class='mb-2'>Owner</label>
                        <input type='text' name='owner' class='form-control @error('owner') is-invalid @enderror'
                            value='{{ $car->owner ?? old('owner') }}'>
                        @error('owner')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='brand' class='mb-2'>Brand</label>
                        <input type='text' name='brand' class='form-control @error('brand') is-invalid @enderror'
                            value='{{ $car->brand ?? old('brand') }}'>
                        @error('brand')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='purchase_date' class='mb-2'>Purchase Date</label>
                        <input type='date' name='purchase_date'
                            class='form-control @error('purchase_date') is-invalid @enderror'
                            value='{{ $car->purchase_date->translatedFormat('Y-m-d') ?? old('purchase_date') }}'>
                        @error('purchase_date')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='description' class='mb-2'>Description</label>
                        <textarea name='description' id='description' cols='30' rows='3'
                            class='form-control @error('description') is-invalid @enderror'>{{ $car->description ?? old('description') }}</textarea>
                        @error('description')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label for='image' class='mb-2'>Image</label>
                        <input type='file' name='image' class='form-control @error('image') is-invalid @enderror'
                            value='{{ old('image') }}'>
                        @error('image')
                            <div class='invalid-feedback'>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class='form-group mb-3'>
                        <label class='mb-2' for='status'>Status</label>
                        <br>
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='status'
                                @if ($car->status === 'Lunas') checked @endif id='lunas' value='Lunas'>
                            <label class='form-check-label' for='lunas'>Lunas</label>
                        </div>
                        <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='status'
                                @if ($car->status === 'Belum Lunas') checked @endif id='Belum Lunas' value='Belum Lunas'>
                            <label class='form-check-label' for='Belum Lunas'>Belum Lunas</label>
                        </div>
                        @error('status')
                        <div class='invalid-feedback d-inline'>
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary px-4">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
