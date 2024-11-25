@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Naše Prodavnice</h1>
    <div class="row g-4">
        @foreach ($stores as $store)
            <div class="col-lg-4 col-md-6">
                <div class="card shadow-sm h-100">
                    <img src="{{ $store->image }}" class="card-img-top" alt="{{ $store->name }}" style="object-fit: cover; height: 200px;">
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
