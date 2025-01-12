<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\PaginationService;

class DashboardController extends Controller
{

    protected $paginationService;

    // Konstruktorska injekcija za PaginationService
    public function __construct(PaginationService $paginationService)
    {
        $this->paginationService = $paginationService;
    }

    public function index()
    {
        $users = $this->paginationService->paginate(User::query(), 10);
        
        //$users = User::all();

        return view('admin.dashboard', compact('users'));
    }
        
}
