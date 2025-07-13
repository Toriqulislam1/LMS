<?php
namespace App\Modules\Role\Repositories;

interface PermissionRepositoryInterface
{
    public function all();
    public function findById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
