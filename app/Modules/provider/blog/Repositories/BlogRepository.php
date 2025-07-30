<?php
namespace App\Modules\provider\blog\Repositories;

use App\Modules\provider\blog\Repositories\BlogRepositoryInterface;

use App\Models\Blog; // Assuming you have a Blog model
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;


class BlogRepository implements BlogRepositoryInterface
{
     public function all(): Collection
    {
        return Blog::all();
    }
    public function frontGetAllBlogs(): Collection
    {
       return Blog::all();
    }

    public function find(int $id): ?Blog
    {
        return Blog::find($id);
    }

    public function create(array $data): Blog
    {
        $data['slug'] = $this->generateUniqueSlug($data['title']);
     
        $thumbnail = $data['thumbnail_blog'] ?? null;
        $feature = $data['feature_blog'] ?? null;
        unset($data['thumbnail_blog'], $data['feature_blog']);
        $blog = Blog::create($data);

        // Optional media upload if file exists and is valid
        if ($thumbnail instanceof UploadedFile) {
            $blog->addMedia($thumbnail)->toMediaCollection('thumbnail_blog');
        }

        if ($feature instanceof UploadedFile) {
            $blog->addMedia($feature)->toMediaCollection('feature_blog');
        }

        return $blog;
    }

    public function update(int $id, array $data): bool
    {
        $blog = Blog::find($id);
        return $blog ? $blog->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $blog = Blog::find($id);
        return $blog ? $blog->delete() : false;
    }

    private function generateUniqueSlug(string $title): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }
}
