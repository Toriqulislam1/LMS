<?php
namespace App\Modules\provider\course\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\provider\auth\Repositories\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
       protected $adminRepo;

    // public function __construct(AdminRepositoryInterface $adminRepo)
    // {
    //     $this->middleware('auth:admin');
    //     $this->adminRepo = $adminRepo;
    // }

    public function index()
    {
        return view('provider.course.index');
    }
    public function create(){
        return view('provider.course.create');
    }

    public function store(Request $request){
        // উদাহরণ: Login বা কোনো Action সফল হলে
    return redirect()->back()->with('success', 'Successfully Logged In');

    }
}
