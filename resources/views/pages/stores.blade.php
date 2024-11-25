@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-5">Naše Prodavnice</h1>
    <div class="store-flex-container">
        @foreach ($stores as $store)
            <div class="store-card">
                <div class="card shadow-sm h-100">
                    <img src="{{ $store->image }}" class="card-img-top" alt="{{ $store->name }}" style="object-fit: cover">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $store->name }}</h5>
                        <p class="card-text text-truncate" title="{{ $store->description }}">{{ $store->description }}</p>
                        <p class="text-muted mb-4">📍 {{ $store->location }}</p>
                        <a href="#" class="btn btn-primary mt-auto">Saznaj više</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

