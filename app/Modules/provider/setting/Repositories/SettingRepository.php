<?php
namespace App\Modules\provider\setting\Repositories;

use App\Modules\provider\setting\Repositories\SettingRepositoryInterface;

use App\Models\GeneralSetting;
use Illuminate\Support\Collection;


class SettingRepository implements SettingRepositoryInterface
{
     public function getGeneralSettingsByProvider(): Collection
    {
        return GeneralSetting::all();
    }

    public function updateGeneralSettings(array $data): bool
    {
            foreach ($data as $key => $value) {
        if (in_array($key, ['_token', 'logo', 'favicon'])) {
            continue;
        }

        GeneralSetting::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }

    // Handle media uploads separately (logo, favicon)
    $mediaSetting = GeneralSetting::firstOrCreate(['key' => 'media']);

    if (!empty($data['logo'])) {
        $mediaSetting->clearMediaCollection('website_logo');
        $mediaSetting->addMedia($data['logo'])->toMediaCollection('website_logo');
    }

    if (!empty($data['favicon'])) {
        $mediaSetting->clearMediaCollection('website_favicon');
        $mediaSetting->addMedia($data['favicon'])->toMediaCollection('website_favicon');
    }

    return true;
    }

}
