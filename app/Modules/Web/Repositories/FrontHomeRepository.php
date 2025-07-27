<?php
namespace App\Modules\Web\Repositories;

use App\Models\GeneralSetting;
use App\Modules\Web\Repositories\FrontHomeRepositoryInterface;


class FrontHomeRepository implements FrontHomeRepositoryInterface{

    public function home() {
        $generalSettings = $this->generalSettings();
        return view('web.home', compact('generalSettings'));
    }
    public function about() {
        $generalSettings = $this->generalSettings();
        return view('web.pages.about.index', compact('generalSettings'));
    }
    public function contact() {
        $generalSettings = $this->generalSettings();
        return view('web.pages.contact.index', compact('generalSettings'));
    }
    public function course() {
        $generalSettings = $this->generalSettings();
        return view('web.pages.course.index', compact('generalSettings'));
    }
    public function blog() {
        $generalSettings = $this->generalSettings();
        return view('web.pages.blog.index', compact('generalSettings'));
    }
    public function blogPost($slug) {
        $generalSettings = $this->generalSettings();
        return view('web.pages.blog-post', compact('generalSettings', 'slug'));
    }
    public function shop() {
        $generalSettings = $this->generalSettings();
        return view('web.pages.shop.index', compact('generalSettings'));
    }
    public function terms() {
        $generalSettings = $this->generalSettings();
        return view('web.pages.terms.index', compact('generalSettings'));
    }
    public function privacy() {
        $generalSettings = $this->generalSettings();
        return view('web.pages.privacy.index', compact('generalSettings'));
    }
    public function generalSettings() {
        $settings = GeneralSetting::all()->pluck('value', 'key');
        $media = GeneralSetting::where('key', 'media')->first();
        return [
            'settings' => $settings,
            'logo' => $media?->getFirstMediaUrl('website_logo'),
            'favicon' => $media?->getFirstMediaUrl('website_favicon'),
        ];
    }
    // public function sitemap() {
    //     return view('web.sitemap');
    // }
    // public function error404() {
    //     return view('web.error404');
    // }
}
