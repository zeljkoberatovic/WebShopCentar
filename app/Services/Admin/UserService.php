<?php

namespace App\Services\Admin;

use App\Models\User;

class UserService
{
    public function getFilteredUsers($request)
    {
        // Start query
        $query = User::query();

        // Filter by name if provided
        if ($request->has('name') && $request->input('name') !== '') {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Filter by email if provided
        if ($request->has('email') && $request->input('email') !== '') {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }

        // Dobijamo filtrirane korisnike sa paginacijom
        return $query->paginate(10);
    }
}
