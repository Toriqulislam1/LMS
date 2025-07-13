<?php
namespace App\Modules\Role\Repositories;

use Spatie\Permission\Models\Role;
use App\Modules\Role\Repositories\RoleRepositoryInterface;
use Spatie\Permission\Models\Permission;


class RoleRepository implements RoleRepositoryInterface
{
    public function all()
    {
        return Role::all();
    }

    public function findById($id)
    {
        return Role::find($id);
    }

    public function create(array $data)
    {
    // Step 1: Create the role
    $role = Role::create([
        'name' => $data['name'],
        'guard_name' => 'web', // Assuming 'web' guard, change if needed
    ]);

    // Step 2: Assign permissions if provided
      if (!empty($data['permissions'])) {
        // Convert IDs to permission models
        $permissions = Permission::whereIn('id', $data['permissions'])->get();
        $role->syncPermissions($permissions); // Works with model instances
    }

    return $role;

    }


 public function updateWithPermissions($id, array $data)
    {
        $role = $this->findById($id);

        // Update role name
        $role->update([
            'name' => $data['name'],
        ]);

        // Sync permissions
        $role->permissions()->sync($data['permissions']);

        return $role;
    }


      public function delete($id)
    {
        $role = $this->findById($id);

        if (!$role) {
            return false;
        }

        return $role->delete();
    }
}
