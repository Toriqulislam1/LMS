<?php
namespace App\Modules\provider\shop\Repositories;

use App\Modules\provider\shop\Repositories\ShopRepositoryInterface;

use App\Models\Shop;
use Illuminate\Support\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;


class ShopRepository implements ShopRepositoryInterface
{
     public function all(): Collection
    {
        return Shop::all();
    }
    public function frontendGetShop()
    {
        return Shop::all();
    }

    public function find(int $id): ?Shop
    {
        return Shop::find($id);
    }


public function create(array $data): Shop
{
    // Generate slug
    $data['slug'] = Str::slug($data['name']);

    // Extract files before creating
    $thumbnail = $data['thumbnail_shop'] ?? null;
    $feature = $data['feature_shop'] ?? null;

    unset($data['thumbnail_shop'], $data['feature_shop']); // remove files from insertable data

    // Create shop
    $shop = Shop::create($data);

    // Handle media uploads
    if ($thumbnail instanceof UploadedFile) {
        $shop->addMedia($thumbnail)->toMediaCollection('thumbnail_shop');
    }

    if ($feature instanceof UploadedFile) {
        $shop->addMedia($feature)->toMediaCollection('feature_shop');
    }

    return $shop;
}


    public function update(int $id, array $data): bool
    {
        $shop = Shop::find($id);
        return $shop ? $shop->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $shop = Shop::find($id);
        return $shop ? $shop->delete() : false;
    }
}
