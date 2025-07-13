<?php
namespace App\Modules\Role\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Role\Repositories\RoleRepositoryInterface;
use Spatie\Permission\Models\Permission;
use App\Modules\Role\Repositories\PermissionRepositoryInterface;

class RoleController extends Controller
{
    protected $roleRepository;
    protected $permissionRepository;

    public function __construct(PermissionRepositoryInterface $permissionRepository,RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->permissionRepository = $permissionRepository;
    }

    public function index()
    {
        $data['roles'] = $this->roleRepository->all();
        return view('admin.roles.index', $data);
    }

    public function create()
    {
        $data['permissions'] = $this->permissionRepository->all();
        return view('admin.roles.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:roles']);
        $this->roleRepository->create($request->all());

         $notification = array(
             'message' => 'Role Inserted Successfully',
             'alert-type' => 'success'
         );

         return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
         $data['role'] = $this->roleRepository->findById($id);
    $data['permissions'] = $this->permissionRepository->all();

    if (!$data['role']) {
        return redirect()->route('admin.roles.index')->with('error', 'Role not found.');
    }
    // Get the assigned permission IDs
    $data['rolePermissions'] = $data['role']->permissions->pluck('id')->toArray();

    return view('admin.roles.edit', $data);
}

    public function update(Request $request, $id)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'permissions' => 'array|required',
    ]);

    $this->roleRepository->updateWithPermissions($id, [
        'name' => $request->name,
        'permissions' => $request->permissions,
    ]);
    // Flash a success message to the session
    $notification = array(
        'message' => 'Role Updated Successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $this->roleRepository->delete($id);
        $notification = array(
            'message' => 'Role Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
