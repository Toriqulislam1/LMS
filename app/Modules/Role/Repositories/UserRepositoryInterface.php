<?php
namespace App\Modules\Role\Repositories;

interface UserRepositoryInterface
{
    public function getAllUsers();
    public function findUserById($id);
    public function createUser(array $data);
    public function updateUser($id, array $data);
    public function deleteUser($id);
    public function assignRoleToUser($userId, $roleId);
}
