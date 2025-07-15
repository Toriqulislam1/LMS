<?php
namespace App\Modules\provider\auth\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\provider\auth\Repositories\AdminRepositoryInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
       protected $adminRepo;

    // public function __construct(AdminRepositoryInterface $adminRepo)
    // {
    //     $this->middleware('auth:admin');
    //     $this->adminRepo = $adminRepo;
    // }

    public function login()
    {
        return view('provider.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $admins = $this->adminRepo->all();
        return view('admin.admins.index', compact('admins'));
    }
}
