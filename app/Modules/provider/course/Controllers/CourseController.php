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

    // public function index()
    // {
    //     $data['courses'] = $this->courseRepo->all();
    //     return view('provider.course.index',$data);
    // }

//     public function index()
// {
//     $data['courses'] = $this->courseRepo->all();
//     $data['coursesJson'] = $data['courses']->map(function ($course) {
//         return [
//             'id' => $course->id,
//             'name' => $course->title,
//             'position' => $course->price,
//             'office' => $course->discount,
//             'age' => $course->duration_month,
//             'startDate' => $course->start_date,
//             'image' => $course->getFirstMediaUrl('course_thumbnail') ?: asset('default-thumbnail.jpg'),
//         ];
//     });

//     return view('provider.course.index', $data);
// }
public function index()
{
    $courses = $this->courseRepo->all()->map(function ($course) {
        return [
            'id' => $course->id,
            'name' => $course->title,
            'image' => $course->image_url ?? 'default-image.jpg', // replace with actual attribute or URL
            'position' => $course->category_name ?? 'N/A',       // map category or other field
            'office' => $course->instructor_name ?? 'N/A',       // example field
            'age' => $course->duration ?? 'N/A',                  // example field
            'startDate' => $course->created_at->format('d M, Y'),
            'salary' => $course->price ? "$" . $course->price : "Free",
        ];
    });

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
