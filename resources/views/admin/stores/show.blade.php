<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $store->name }}</h3>
    </div>
    <div class="card-body">
        <h5>Opis</h5>
        <p>{{ $store->description }}</p>

        <h5>Lokacija</h5>
        <p>{{ $store->location ?? 'N/A' }}</p>

        <h5>Status</h5>
        <p>{{ ucfirst($store->status) }}</p>

        <h5>Tip</h5>
        <p>{{ ucfirst($store->type) }}</p>

        <h5>URL</h5>
        <p>{{ $store->url }}</p>

        <h5>Vidljivost</h5>
        <p>{{ ucfirst($store->visibility) }}</p>

        <h5>Vlasnik</h5>
        <p>{{ $store->owner->name }}</p>
    </div>
</div>