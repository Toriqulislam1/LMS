<?php
namespace App\Modules\provider\course\Repositories;

use App\Modules\provider\course\Repositories\CourseRepositoryInterface;

use App\Models\Course;
use Illuminate\Support\Collection;


class CourseRepository implements CourseRepositoryInterface
{
     public function all(): Collection
    {
        return Course::all();
    }

    public function find(int $id): ?Course
    {
        return Course::find($id);
    }

    public function create(array $data): Course
    {
         $course = Course::create($data);
        if ($data['thumbnail_course']) {
            $course->addMedia($data['thumbnail_course'])->toMediaCollection('thumbnail_course');
        }
        return $course;
    }

    public function update(int $id, array $data): bool
    {
        $course = Course::find($id);
        return $course ? $course->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $course = Course::find($id);
        return $course ? $course->delete() : false;
    }
}
