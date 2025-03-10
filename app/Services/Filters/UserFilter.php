<?php

namespace App\Services\Filters;

use App\Models\User;

class UserFilter extends BaseFilter
{
    public function filters()
    {
        return [
            'name' => request('name'),
            'email' => request('email'),
        ];
    }

    public function name($query, $value)
    {
        if ($value) {
            $query->where('name', 'like', '%' . $value . '%');
        }

        return $query;
    }

    public function email($query, $value)
    {
        if ($value) {
            $query->where('email', 'like', '%' . $value . '%');
        }

        return $query;
    }
}


