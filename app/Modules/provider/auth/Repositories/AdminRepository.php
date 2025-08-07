<?php
namespace App\Modules\provider\auth\Repositories;

use App\Modules\provider\auth\Repositories\AdminRepositoryInterface;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Models\Admin;


class AdminRepository implements AdminRepositoryInterface
{

    public function __construct()
    {
        // You can inject any dependencies here if needed
    }
    public function updateAdminProfile($id, array $data)
    {
        $admin = Admin::findOrFail($id);

        $admin->update($data);

        return $admin;
    }

    // public function all()
    // {
    //     return Admin::all();
    // }

    // public function find($id)
    // {
    //     return Admin::findOrFail($id);
    // }

    // public function create(array $data)
    // {
    //     return Admin::create($data);
    // }

    // public function update($id, array $data)
    // {
    //     $admin = Admin::findOrFail($id);
    //     $admin->update($data);
    //     return $admin;
    // }

    // public function delete($id)
    // {
    //     return Admin::destroy($id);
    // }




    public function generalSettings() {

        $settings = GeneralSetting::all()->pluck('value', 'key');
        $media = GeneralSetting::where('key', 'media')->first();
        return [
            'settings' => $settings,
            'logo' => $media?->getFirstMediaUrl('website_logo'),
            'favicon' => $media?->getFirstMediaUrl('website_favicon'),
        ];
    }



}
