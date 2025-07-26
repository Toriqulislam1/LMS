<?php

namespace App\Modules\Web\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('web.home');
    }
    public function about()
    {
        return view('web.about');
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function course()
    {
        return view('web.course');
    }
    public function blog()
    {
        return view('web.blog');
    }
    public function blogPost($slug)
    {
        return view('web.blog-post', ['slug' => $slug]);
    }
    public function shop()
    {
        return view('web.shop');
    }
    public function terms()
    {
        return view('web.terms');
    }
    public function privacy()
    {
        return view('web.privacy');
    }
    public function sitemap()
    {
        return view('web.sitemap');
    }
    public function error404()
    {
        return view('web.error404');
    }
}
