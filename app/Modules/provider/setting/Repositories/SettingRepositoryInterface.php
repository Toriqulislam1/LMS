<?php
namespace App\Modules\provider\setting\Repositories;

use Illuminate\Support\Collection;

interface SettingRepositoryInterface
{
    public function getGeneralSettingsByProvider(): Collection;
    public function updateGeneralSettings(array $data): bool;

}
