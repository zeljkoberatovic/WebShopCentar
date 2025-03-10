<?php



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
        // Dobijamo podatke za nove klijente
        $data = $this->newclientsdataService->getNewClientsData();

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
        $users = $query->paginate(10);

        
    // Proveri da li su korisnici prazni
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
