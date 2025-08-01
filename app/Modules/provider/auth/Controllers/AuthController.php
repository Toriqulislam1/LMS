<?php
namespace App\Modules\provider\auth\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\provider\auth\Repositories\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
       protected $adminRepo;

    public function __construct(AdminRepositoryInterface $adminRepo)
    {
       
        $this->adminRepo = $adminRepo;
    }

    public function login()
    {
        return view('provider.login');
    }
    public function loginSucess(Request $request){

         $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin-dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function dashboard()
    {
        $generalSettings = $this->adminRepo->generalSettings();
        return view('provider.home', compact('generalSettings'));

    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('provider-login');
    }
}
