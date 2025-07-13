<?php
namespace App\Modules\Role\Repositories;
use App\Modules\Role\Repositories\UserRepositoryInterface;
use Spatie\Permission\Models\Role;
use Illuminate\Http\UploadedFile;
use App\Modules\Role\Repositories\RoleRepositoryInterface;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Models\Permission;
use App\Modules\Role\Repositories\PermissionRepositoryInterface;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
  public function getAllUsers()
{
    $search = request('search', '');
    $cacheKey = "users:search:{$search}";

    return Cache::remember($cacheKey, now()->addMinutes(10), function () use ($search) {
        return User::when($search, fn($q) => $q->where('name', 'like', "%$search%"))
                   ->latest()->get();
    });
}
      public function findUserById($id)
    {
        return User::findOrFail($id);
    }
    public function findRoleById($id)
    {
        return Role::findOrFail($id);
    }

  public function createUser(array $data)
{
    $User = User::create([
        'name'     => $data['name'],
        'email'    => $data['email'],
        'password' => bcrypt($data['password']),
        'phone'    => $data['phone'] ?? null,
    ]);

    if (isset($data['img']) && $data['img'] instanceof UploadedFile) {
        $User->addMedia($data['img'])->toMediaCollection('profile');
    }

    return $User;
}

    public function updateUser($id, array $data)
    {

        $user = $this->findUserById($id);
        $user->update([
            'name'  => $data['name'],
            'email' => $data['email'],
            // 'phone' => $data['phone'],
            'password' => isset($data['password']) ? bcrypt($data['password']) : $user->password,

        ]);

         if (isset($data['img']) && $data['img'] instanceof UploadedFile) {
            $user->addMedia($data['img'])->toMediaCollection('profile');
        }
        return $user;
    }

    public function deleteUser($id)
    {
        $user = $this->findUserById($id);
        return $user->delete();
    }

    public function assignRoleToUser($userId, $roleId)
    {
        $user = $this->findUserById($userId);
        $role = $this->findRoleById($roleId);
        return $user->assignRole($role);
    }
}
