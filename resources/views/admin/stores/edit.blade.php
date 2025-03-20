@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Izmeni prodavnicu: {{ $store->name }}</h2>

        <!-- Form for editing store -->
        <form action="{{ route('admin.stores.update', $store->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Store Name -->
            <div class="form-group mb-3">
                <label for="name">Ime prodavnice</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $store->name) }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Location -->
            <div class="form-group mb-3">
                <label for="location">Lokacija</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $store->location) }}">
                @error('location')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Type -->
            <div class="form-group mb-3">
                <label for="type">Tip</label>
                <select name="type" id="type" class="form-control">
                    <option value="physical" {{ $store->type == 'physical' ? 'selected' : '' }}>Fizička</option>
                    <option value="online" {{ $store->type == 'online' ? 'selected' : '' }}>Online</option>
                </select>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Status -->
            <div class="form-group mb-3">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ $store->status == 'active' ? 'selected' : '' }}>Aktivan</option>
                    <option value="inactive" {{ $store->status == 'inactive' ? 'selected' : '' }}>Neaktivan</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Visibility -->
            <div class="form-group mb-3">
                <label for="visibility">Vidljivost</label>
                <select name="visibility" id="visibility" class="form-control">
                    <option value="visible" {{ $store->visibility == 'visible' ? 'selected' : '' }}>Vidljiv</option>
                    <option value="hidden" {{ $store->visibility == 'hidden' ? 'selected' : '' }}>Skriven</option>
                </select>
                @error('visibility')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- URL -->
            <div class="form-group mb-3">
                <label for="url">URL</label>
                <input type="url" name="url" id="url" class="form-control" value="{{ old('url', $store->url) }}">
                @error('url')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="form-group mb-3">
                <label for="description">Opis</label>
                <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $store->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Sacuvaj izmjene</button>
        </form>

        <!-- Back Button -->
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mt-3">Nazad na listu prodavnica</a>
    </div>
@endsection
