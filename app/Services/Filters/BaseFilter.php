<?php


namespace App\Services\Filters;

use Illuminate\Database\Eloquent\Builder;

class BaseFilter
{
    public function apply(Builder $query, array $filters)
    {
        
        // Dodaj svoju logiku za filtriranje ovde, na primer:
        if ($value) {
            // Pretpostavljamo da je $value za kolonu kao što je "name" ili "email"
            $query->where($this->getColumnName(), 'like', '%' . $value . '%');
        }

        return $query;
    }
}
