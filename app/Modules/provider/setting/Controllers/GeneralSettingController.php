<?php

namespace App\Modules\provider\setting\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\provider\setting\Repositories\SettingRepositoryInterface;
use App\Modules\provider\setting\Requests\CourseRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    protected $settingRepo;

    public function __construct(SettingRepositoryInterface $settingRepo)
    {
        // $this->middleware('auth:admin');
        $this->settingRepo = $settingRepo;
    }

    public function general()
    {
        $data['settings'] = $this->settingRepo->getGeneralSettingsByProvider();
        return view('provider.settings.general', $data);
    }


    public function updateGeneral(Request $request)
    {
        $this->settingRepo->updateGeneralSettings($request->all());
        return redirect()->back()->with('success', 'General settings updated successfully.');
    }

}
