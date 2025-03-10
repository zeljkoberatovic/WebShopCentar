<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Admin\NewClientsDataService;
use App\Services\Admin\UserService;

class DashboardController extends Controller
{
    protected $newclientsdataService;
    protected $userService;

    // Konstruktorska injekcija za PaginationService
    public function __construct(NewClientsDataService $newclientsdataService,
                                UserService $userService,)
    {
        
        $this->newclientsdataService = $newclientsdataService;
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
    
    // Dobijamo podatke za nove klijente
        $data = $this->newclientsdataService->getNewClientsData();

    // Koristi UserService za filtriranje i paginaciju korisnika
        $users = $this->userService->getFilteredUsers($request);

        
    // Proverava da li su korisnici prazni
        $noUsersFound = $users->isEmpty();

    // Vraćanje pogleda sa podacima i filtriranim korisnicima
        return view('admin.dashboard', compact('data', 'users', 'noUsersFound'));

    } 
    
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user-details', compact('user'));
    }
}
