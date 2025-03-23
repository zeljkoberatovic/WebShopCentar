<!-- Lista Prodavnica - Pretraga -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-header border-0 d-flex align-items-center justify-content-between">
            <h3 class="card-title m-0" style="font-size: 1.5rem;">Lista prodavnica</h3>

            <form method="GET" action="{{ route('admin.stores.index') }}">
                <input type="text" name="name" value="{{ request('name') }}" placeholder="Pretraga po imenu">
                <input type="text" name="location" value="{{ request('location') }}" placeholder="Pretraga po lokaciji">
                <select name="type">
                    <option value="">-- Izaberi vrstu --</option>
                    <option value="physical" {{ request('type') == 'physical' ? 'selected' : '' }}>Fizička prodavnica</option>
                    <option value="online" {{ request('type') == 'online' ? 'selected' : '' }}>Online prodavnica</option>
                </select>
                <button type="submit">Pretraži</button>
            </form>
             
            
        </div>

        <div class="card-body">
            <!-- Ako nema prodavnica, prikaži poruku -->
            @if ($stores->isEmpty())
                <div class="alert alert-warning">
                    Nema prodavnica koje odgovaraju pretrazi.
                    <a href="javascript:void(0);" onclick="window.history.back();">Vrati se nazad</a>
                </div>
            @endif

            <!-- Tabela prodavnica -->
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Ime Prodavnice</th>
                            <th>Lokacija</th>
                            <th>Tip</th>
                            <th>Status</th>
                            <th>Akcija</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stores as $store)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ route('admin.stores.show', $store->id) }}">{{ $store->name }}</a></td>
                                <td>{{ $store->location ?? 'N/A' }}</td>
                                <td>{{ ucfirst($store->type) }}</td>
                                <td>
                                    <span class="badge {{ $store->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                        {{ ucfirst($store->status) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.stores.edit', $store->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ route('admin.stores.destroy', $store->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
 
<!-- Paginate -->
<x-pagination :paginator="$stores" />
        </div>
    </div>
</div>

