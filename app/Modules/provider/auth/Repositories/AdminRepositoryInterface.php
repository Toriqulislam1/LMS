<?php
namespace App\Modules\provider\auth\Repositories;

interface AdminRepositoryInterface
{
    // public function all();
    // public function find($id);
    // public function create(array $data);
    // public function update($id, array $data);
    // public function delete($id);
    public function updateAdminProfile($id, array $data);
}
