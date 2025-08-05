<?php
namespace App\Modules\Web\Repositories;

interface FrontHomeRepositoryInterface
{
    public function home();
    public function about();
    public function contact();
    public function course();
    public function blog();
    public function blogPost($slug, $id);
    public function shop();
    public function shopDetail($id);
    public function terms();
    public function privacy();
    public function courseDetail($slug, $id);
    public function studyAbroad();
    // public function sitemap();
    // public function error404();

}

