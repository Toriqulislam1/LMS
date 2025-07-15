
<?php
namespace App\Modules\auth\Repositories;

use App\Models\Admin;


class AdminRepository implements AdminRepositoryInterface
{
    public function all()
    {
        return Admin::all();
    }

    public function find($id)
    {
        return Admin::findOrFail($id);
    }

    public function create(array $data)
    {
        return Admin::create($data);
    }

    public function update($id, array $data)
    {
        $admin = Admin::findOrFail($id);
        $admin->update($data);
        return $admin;
    }

    public function delete($id)
    {
        return Admin::destroy($id);
    }
}
