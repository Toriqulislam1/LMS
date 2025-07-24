<?php
namespace App\Modules\provider\blog\Repositories;

use App\Modules\provider\blog\Repositories\BlogRepositoryInterface;

use App\Models\Blog; // Assuming you have a Blog model
use Illuminate\Support\Collection;


class BlogRepository implements BlogRepositoryInterface
{
     public function all(): Collection
    {
        return Blog::all();
    }

    public function find(int $id): ?Blog
    {
        return Blog::find($id);
    }

    public function create(array $data): Blog
    {
        $blog = Blog::create($data);
        if ($data['thumbnail_blog']) {
            $blog->addMedia($data['thumbnail_blog'])->toMediaCollection('thumbnail_blog');
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
}
