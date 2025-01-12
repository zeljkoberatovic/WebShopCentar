<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;

class PaginationService
{
    /**
     * Generalna metoda za paginaciju.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $perPage
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function paginate($query, $perPage = 10)
    {
        // Vraća paginirane rezultate
        return $query->paginate($perPage);
    }
}

