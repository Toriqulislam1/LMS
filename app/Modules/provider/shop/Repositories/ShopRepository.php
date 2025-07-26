<?php
namespace App\Modules\provider\shop\Repositories;

use App\Modules\provider\shop\Repositories\ShopRepositoryInterface;

use App\Models\Shop;
use Illuminate\Support\Collection;


class ShopRepository implements ShopRepositoryInterface
{
     public function all(): Collection
    {
        return Shop::all();
    }

    public function find(int $id): ?Shop
    {
        return Shop::find($id);
    }

    public function create(array $data): Shop
    {
        $shop = Shop::create($data);
        if ($data['thumbnail_shop']) {
            $shop->addMedia($data['thumbnail_shop'])->toMediaCollection('thumbnail_shop');
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
