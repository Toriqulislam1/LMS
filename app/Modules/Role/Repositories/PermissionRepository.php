<?php
namespace App\Modules\Role\Repositories;

use Spatie\Permission\Models\Permission;
use App\Modules\Role\Repositories\PermissionRepositoryInterface;



class PermissionRepository implements PermissionRepositoryInterface
{
    public function all()
    {
        return Permission::all();
    }

    public function findById($id)
    {
        return Permission::find($id);
    }

    public function create(array $data)
    {
        return Permission::create(['name' => $data['name']]);
    }

    public function update($id, array $data)
    {
        $role = $this->findById($id);
        $role->name = $data['name'];
        $role->save();
        return $role;
    }

    public function delete($id)
    {
        $permission = $this->findById($id);
        return $permission->delete();
    }
}
