<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use App\Services\Admin\NewClientsDataService;
use App\Services\Admin\UserService;


class DashboardController extends Controller
{
    protected $newclientsdataService;
    protected $userService;
    

    
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

    // Koristimo UserService za filtriranje i paginaciju korisnika
        $users = $this->userService->getFilteredUsers($request);

        
    // Provjerava da li su korisnici prazni
        $noUsersFound = $users->isEmpty();
        

    // Vraćanje pogleda sa podacima i filtriranim korisnicima
        return view('admin.dashboard', compact('data', 'users', 'noUsersFound',));

    }

    
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user-details', compact('user'));
    }
}
