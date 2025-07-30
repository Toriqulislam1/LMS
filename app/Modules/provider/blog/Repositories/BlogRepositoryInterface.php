<?php
namespace App\Modules\provider\blog\Repositories;

use Illuminate\Support\Collection;

interface BlogRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?object;
    public function create(array $data): object;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function frontGetAllBlogs(): Collection;
}
