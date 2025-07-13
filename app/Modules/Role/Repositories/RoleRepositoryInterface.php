<?php
namespace App\Modules\Role\Repositories;

interface RoleRepositoryInterface
{
    public function all();
    public function findById($id);
    public function create(array $data);
    public function delete($id);
    public function updateWithPermissions($id, array $data);
}
