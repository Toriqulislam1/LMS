<?php
namespace App\Modules\provider\course\Repositories;

use Illuminate\Support\Collection;

interface CourseRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?object;
    public function create(array $data): object;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function frontendGetCourses(): Collection;
}
