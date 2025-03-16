<!-- Lista prodavnica -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lista prodavnica</h3>
    </div>



    <!-- Pretraga -->
    <div class="ms-auto text-secondary">
        Search:
        <div class="ms-2 d-inline-block">
            <input type="text" class="form-control form-control-sm" placeholder="Search store" aria-label="Search store" name="search" value="{{ request('search') }}">
        </div>
    </div>

    

    <!-- Filtriranje po statusu, tipu i vidljivosti -->
    <div class="card-body">
        <form method="GET" action="{{ route('admin.stores.index') }}">
            <div class="d-flex">
                <div class="ms-2">
                    <label for="status">Status:</label>
                    <select name="status" class="form-control form-control-sm">
                        <option value="">All</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <div class="ms-2">
                    <label for="type">Type:</label>
                    <select name="type" class="form-control form-control-sm">
                        <option value="">All</option>
                        <option value="physical" {{ request('type') == 'physical' ? 'selected' : '' }}>Physical</option>
                        <option value="online" {{ request('type') == 'online' ? 'selected' : '' }}>Online</option>
                    </select>
                </div>
                <div class="ms-2">
                    <label for="visibility">Visibility:</label>
                    <select name="visibility" class="form-control form-control-sm">
                        <option value="">All</option>
                        <option value="private" {{ request('visibility') == 'private' ? 'selected' : '' }}>Private</option>
                        <option value="public" {{ request('visibility') == 'public' ? 'selected' : '' }}>Public</option>
                        <option value="hidden" {{ request('visibility') == 'hidden' ? 'selected' : '' }}>Hidden</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary ms-2">Filter</button>
            </div>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
                <tr>
                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all stores"></th>
                    <th>No.</th>
                    <th>Ime Prodavnice</th>
                    <th>Lokacija</th>
                    <th>Tip</th>
                    <th>Vidljivost</th>
                    <th>Status</th>
                    <th>Akcija</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stores as $store)
                    <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select store"></td>
                        <td><span class="text-secondary">{{ $store->id }}</span></td>
                        <td><a href="{{ route('admin.stores.show', $store->id) }}" class="text-reset">{{ $store->name }}</a></td>
                        <td>{{ $store->location ?? 'N/A' }}</td>
                        <td>{{ ucfirst($store->type) }}</td>
                        <td>{{ ucfirst($store->visibility) }}</td>
                        <td>
                            <span class="badge {{ $store->status == 'active' ? 'bg-success' : 'bg-warning' }} me-1">
                                {{ ucfirst($store->status) }}
                            </span>
                        </td>
                        <td>{{ $store->url }}</td>
                        <td class="text-end">
                            <span class="dropdown">
                                <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('admin.stores.edit', $store->id) }}">Edit</a>
                                    <form action="{{ route('admin.stores.destroy', $store->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item">Delete</button>
                                    </form>
                                </div>
                            </span>
                        </td>
                    </tr>
                @endforeach

                @if($stores->isEmpty())
                    <tr>
                        <td colspan="10" class="text-center">No stores found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

   
</div>
