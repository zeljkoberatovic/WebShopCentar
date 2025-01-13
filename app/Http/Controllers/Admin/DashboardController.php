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
    public function index()
    {
        

        $data = $this->newclientsdataService->getNewClientsData();

        $users = $this->paginationService->paginate(User::query(), 10);
        
        return view('admin.dashboard', compact('data','users'));
    }
        
}
