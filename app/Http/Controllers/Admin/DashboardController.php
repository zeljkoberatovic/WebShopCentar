<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Services\PaginationService;
use App\Services\Admin\NewClientsDataService;

class DashboardController extends Controller
{

    protected $paginationService;
    protected $newclientsdataService;

    // Konstruktorska injekcija za PaginationService
    public function __construct(PaginationService $paginationService,
                                NewClientsDataService $newclientsdataService)
    {

        $this->paginationService = $paginationService;
        $this->newclientsdataService = $newclientsdataService;
    
    }
    public function index(Request $request)
    {
        $data = $this->newclientsdataService->getNewClientsData();
        $users = $this->paginationService->paginate(User::query(), 10);

         // Uzmi unos iz parametra "q" iz GET zahteva
    $query = $request->input('q');
    
    // Dobijamo podatke za nove klijente
    $data = $this->newclientsdataService->getNewClientsData();

    // Filtriramo korisnike prema unesenom parametru pretrage "q"
    $usersQuery = User::query()
        ->when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'like', "%{$query}%")
                                 ->orWhere('email', 'like', "%{$query}%");
        });


       
        return view('admin.dashboard', compact('data','users'));
    }     
}

