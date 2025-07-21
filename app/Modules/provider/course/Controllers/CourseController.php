<?php

namespace App\Modules\provider\course\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\provider\course\Repositories\CourseRepositoryInterface;
use App\Modules\provider\course\Requests\CourseRequest;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    protected $courseRepo;

    public function __construct(CourseRepositoryInterface $courseRepo)
    {
        $this->middleware('auth:admin');
        $this->courseRepo = $courseRepo;
    }

    public function index()
    {
        $courses = $this->courseRepo->all();
        return view('provider.course.index', compact('courses'));
    }

    public function create()
    {
        return view('provider.course.create');
    }

    public function store(CourseRequest $request)
    {
        $this->courseRepo->create($request->all());
        return redirect()->back()->with('success', 'Course created successfully.');
    }

}
