@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row">
            @foreach ($cars as $car)
            <div class="col-md-4 mb-5">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="{{ $car->image() }}" class="img-fluid rounded-4" alt="">
                            <h5 class="mt-2">{{ $car->name }}</h5>
                            <p class="small text-muted">
                              {{ \Str::limit($car->description,120) }}
                            </p>
                            <a href="{{ route('cars.show',$car->id) }}" class="btn btn-primary rounded-5 px-4">Detail</a>
                            <form action="{{ route('cars.destroy',$car->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger rounded-5 px-4" onclick="return confirm('Apakah yakin?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
