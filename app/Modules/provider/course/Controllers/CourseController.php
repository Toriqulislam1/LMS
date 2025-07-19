<?php

namespace App\Modules\provider\course\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\provider\course\Repositories\CourseRepositoryInterface;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required|string|max:100',
        ]);

        $this->courseRepo->store($validated);

        return redirect()->route('provider.course.index')->with('success', 'Course created successfully.');
    }

}
