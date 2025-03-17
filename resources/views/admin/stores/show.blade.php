@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Detalji prodavnice: {{ $store->name }}</h2>
        <p><strong>Ime Prodavnice:</strong> {{ $store->name }}</p>
        <p><strong>Lokacija:</strong> {{ $store->location ?? 'N/A' }}</p>
        <p><strong>Tip:</strong> {{ ucfirst($store->type) }}</p>
        <p><strong>Status:</strong> 
            <span class="badge {{ $store->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                {{ ucfirst($store->status) }}
            </span>
        </p>
        <p><strong>Vidljivost:</strong> {{ ucfirst($store->visibility) }}</p>
        <p><strong>URL:</strong> {{ $store->url ?? 'N/A' }}</p>
        <p><strong>Datum kreiranja:</strong> {{ $store->created_at->format('d M Y') }}</p>
        <p><strong>Datum poslednje izmene:</strong> {{ $store->updated_at->format('d M Y') }}</p>
        <p><strong>Opis:</strong> {{ $store->description ?? 'No description available' }}</p>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Nazad na listu prodavnica</a>
        <a href="{{ route('admin.stores.edit', $store->id) }}" class="btn btn-warning">Izmeni prodavnicu</a>

        <!-- Optionally, add a delete button -->
        <form action="{{ route('admin.stores.destroy', $store->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Obriši prodavnicu</button>
        </form>
    </div>
@endsection
