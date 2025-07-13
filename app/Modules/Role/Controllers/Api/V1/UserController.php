<?php
namespace App\Modules\Role\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Role\Repositories\UserRepositoryInterface;
use App\Modules\Role\Repositories\RoleRepositoryInterface;
use App\Http\Requests\AdminRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Modules\Role\Resources\UserResource;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    protected $userRepository;
    protected $roleRepository;

    public function __construct(UserRepositoryInterface $userRepository,RoleRepositoryInterface $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index(): JsonResponse
    {
        $users = $this->userRepository->getAllUsers();

        return response()->json([
            'success' => true,
            'message' => 'User list retrieved successfully.',
            'data' => UserResource::collection($users),
        ]);
    }

    public function create()
    {
        $data['roles'] = $this->roleRepository->all();
        return view('admin.users.create', $data);
    }

    public function store(Request  $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins,email'],
            'password' => ['required', 'string'],
            'role_id' => ['required', 'exists:roles,id'],
        ]);
        $user = $this->userRepository->createUser($request->all());

        // Assign selected role
        $this->userRepository->assignRoleToUser($user->id, $request->role_id);



       	$notification = array(
			'message' => 'Admin created successfully.',
			'alert-type' => 'success'
		);
		return back()->with($notification);
    }

    // GET /admin/users/{id}
    public function show($id)
    {
        $admin = $this->userRepository->findUserById($id);
        return view('admin.users.show', compact('admin'));
    }

    // GET /admin/users/{id}/edit
    public function edit($id)
    {
        $data['admin_user'] = $this->userRepository->findUserById($id);
        $data['roles'] = $this->roleRepository->all();
        return view('admin.users.edit', $data);
    }

    // PUT/PATCH /admin/users/{id}
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'string'],
            'role_id' => ['nullable', 'exists:roles,id'],
        ]);

        $admin = $this->userRepository->updateUser($id, $request->all());
        $role = Role::find($request->role_id);
        $admin->syncRoles([$role->name]);

        $notification = array(
            'message' => 'Admin updated successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('admin-users.index')->with($notification);
    }

    // DELETE /admin/users/{id}
    public function destroy($id)
    {
        $this->userRepository->deleteUser($id);
            $notification = array(
			'message' => 'Admin deleted successfully.',
			'alert-type' => 'success'
		);
		return back()->with($notification);

    }
}
