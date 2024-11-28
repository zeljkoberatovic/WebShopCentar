@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-5">Naše Prodavnice</h1>
    <div class="store-flex-container">
        @if($stores->isEmpty())
            <div class="alert alert-warning text-center">
                Trenutno nema dostupnih prodavnica.
            </div>
        @else
            @foreach ($stores as $store)
                <div class="store-card">
                    <div class="card shadow-sm h-100">
                        <img src="{{ $store->image ?: asset('images/default-store-image.jpg') }}" class="card-img-top" alt="{{ $store->name }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $store->name }}</h5>
                            <p class="card-text text-truncate" title="{{ $store->description }}">{{ $store->description }}</p>
                            <p class="text-muted mb-4">📍 {{ $store->location }}</p>
                            <a href="#" class="btn btn-primary mt-auto">Saznaj više</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
