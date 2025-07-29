<?php
namespace App\Modules\provider\course\Repositories;

use App\Modules\provider\course\Repositories\CourseRepositoryInterface;

use App\Models\Course;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class CourseRepository implements CourseRepositoryInterface
{
     public function all(): Collection
    {
        return Course::all();
    }
    public function frontendGetCourses(): Collection
    {
        return Course::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get(['id', 'title', 'sub_title','price', 'slug','start_date','discount']);
    }

    public function find(int $id): ?Course
    {
        return Course::find($id);
    }

public function create(array $data): Course
{
    $data['slug'] = $this->generateUniqueSlug($data['title']);

    // Store files separately and unset from $data before insert
    $thumbnail = $data['thumbnail_course'] ?? null;
    $feature = $data['feature_course'] ?? null;

    unset($data['thumbnail_course'], $data['feature_course']);

    // Insert course data into database
    $course = Course::create($data);

    // Optional media upload if file exists and is valid
    if ($thumbnail instanceof UploadedFile) {
        $course->addMedia($thumbnail)->toMediaCollection('thumbnail_course');
    }

    if ($feature instanceof UploadedFile) {
        $course->addMedia($feature)->toMediaCollection('feature_course');
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

    private function generateUniqueSlug(string $title): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (Course::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }
}
