<?php

namespace App\Modules\provider\shop\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\provider\shop\Repositories\ShopRepositoryInterface;
use App\Modules\provider\shop\Requests\ShopRequest;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    protected $shopRepo;

    public function __construct(ShopRepositoryInterface $shopRepo)
    {
        $this->middleware('auth:admin');
        $this->shopRepo = $shopRepo;
    }


    public function index()
    {
        $shops = $this->shopRepo->all()->map(function ($shop) {
            return [
                'id' => $shop->id,
                'name' => $shop->title,
                'sub_title' => $shop->sub_title,
                'description' => $shop->description,
                'image' => $shop->getFirstMediaUrl('thumbnail_shop') ?: asset('default-image.jpg'),
            ];
        });

        return view('provider.shop.index', compact('shops'));
    }
    public function create()
    {
        return view('provider.shop.create');
    }
    public function store(ShopRequest $request)
    {
        $this->shopRepo->create($request->all());
        return redirect()->back()->with('success', 'Shop created successfully.');
    }
    public function edit($id)
    {
        $shop = $this->shopRepo->find($id);
        if (!$shop) {
            return redirect()->back()->with('error', 'Shop not found.');
        }
        return view('provider.shop.edit', compact('shop'));
    }
    public function update(ShopRequest $request, $id)
    {
        $shop = $this->shopRepo->find($id);
        if (!$shop) {
            return redirect()->back()->with('error', 'Shop not found.');
        }
        $this->shopRepo->update($id, $request->all());
        return redirect()->back()->with('success', 'Shop updated successfully.');
    }
    public function destroy($id)
    {
        $shop = $this->shopRepo->find($id);
        if (!$shop) {
            return redirect()->back()->with('error', 'Shop not found.');
        }
        $this->shopRepo->delete($id);
        return redirect()->back()->with('success', 'Shop deleted successfully.');
    }

}
