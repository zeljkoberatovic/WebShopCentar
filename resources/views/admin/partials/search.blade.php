<!-- resources/views/partials/search.blade.php -->
<form method="GET" action="{{ route('search') }}">
    <div class="form-group">
        <input type="text" name="query" class="form-control" placeholder="Pretraga..." value="{{ request('query') }}">
    </div>
    <button type="submit" class="btn btn-primary">Pretraži</button>
</form>
