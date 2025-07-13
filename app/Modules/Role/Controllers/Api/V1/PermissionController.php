<?php
namespace App\Modules\Role\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Role\Repositories\PermissionRepositoryInterface;
use App\Modules\Role\Repositories\RoleRepositoryInterface;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    protected $permissionRepository;
    protected $roleRepository;

    public function __construct(PermissionRepositoryInterface $permissionRepository,RoleRepositoryInterface $roleRepository)
    {
        $this->permissionRepository = $permissionRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        $data['permissions'] = Permission::with('roles')->get();

        return view('admin.permission.index', $data);
    }

    public function create()
    {
        $data['roles'] = $this->roleRepository->all();
        return view('admin.permission.create', $data);
    }

public function store(Request $request)
{
    // Validate request
    $request->validate([
        'name' => 'required|string|unique:permissions,name',
        'roles' => 'required|array',
        'roles.*' => 'exists:roles,id',
    ]);

    // Create permission with 'admin' guard
    $permission = Permission::create([
        'name' => $request->name,
        'guard_name' => 'admin'
    ]);

    // Assign permission to each role using correct guard
    foreach ($request->roles as $roleId) {
        $role = Role::findById($roleId, 'admin'); // ✅ Specify 'admin' guard
        $role->givePermissionTo($permission);
    }

        $notification = [
            'message' => 'Permission Inserted & Assigned Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
}

    public function edit($id)
    {
        $data['permission'] = $this->permissionRepository->findById($id);
        $data['roles'] = $this->roleRepository->all();
        $data['assignedRoles'] = $data['permission']->roles->pluck('id')->toArray();

        return view('admin.permission.edit', $data);
    }

    public function update(Request $request, $id)
    {
          $request->validate([
        'name' => 'required|string|max:255|unique:permissions,name,' . $id,
        'roles' => 'required|array|min:1',
    ]);

    $permission = $this->permissionRepository->findById($id);
    $permission->update(['name' => $request->name]);

    // Re-assign roles
    foreach (Role::where('guard_name', 'admin')->get() as $role) {
        if (in_array($role->id, $request->roles)) {
            if (!$role->hasPermissionTo($permission->name)) {
                $role->givePermissionTo($permission);
            }
        } else {
            $role->revokePermissionTo($permission);
        }
    }

        $notification = [
            'message' => 'Permission Update Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin-permissions.index')->with($notification);
    }

    public function destroy($id)
    {
        $this->permissionRepository->delete($id);

            $notification = [
            'message' => 'Permission Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
