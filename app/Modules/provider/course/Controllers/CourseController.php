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
            'image' => $course->getFirstMediaUrl('thumbnail_course') ?: asset('default-image.jpg'), // ✅ Corrected
            'price' => $course->price ? "$" . $course->price : "Free",
            'discount' => $course->discount ?? 'N/A',
            'startDate' => $course->created_at->format('d M, Y'),
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
    public function edit($id)
    {
        $course = $this->courseRepo->find($id);
        if (!$course) {
            return redirect()->back()->with('error', 'Course not found.');
        }
        return view('provider.course.edit', compact('course'));
    }
    public function update(CourseRequest $request, $id)
    {
        $course = $this->courseRepo->find($id);
        if (!$course) {
            return redirect()->back()->with('error', 'Course not found.');
        }
        $this->courseRepo->update($id, $request->all());
        return redirect()->back()->with('success', 'Course updated successfully.');
    }
    public function destroy($id)
    {
        $course = $this->courseRepo->find($id);
        if (!$course) {
            return redirect()->back()->with('error', 'Course not found.');
        }
        $this->courseRepo->delete($id);
        return redirect()->back()->with('success', 'Course deleted successfully.');
    }

}
