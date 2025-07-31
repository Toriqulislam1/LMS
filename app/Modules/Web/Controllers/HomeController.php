<?php
namespace App\Modules\Web\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Web\Repositories\FrontHomeRepositoryInterface;
use App\Modules\provider\course\Repositories\CourseRepositoryInterface;

class HomeController extends Controller
{
    protected $frontHomeRepo;
    public function __construct(FrontHomeRepositoryInterface $frontHomeRepo)
    {
        $this->frontHomeRepo = $frontHomeRepo;
    }

    public function home()
    {
        return $this->frontHomeRepo->home();
    }
    public function about()
    {
        return $this->frontHomeRepo->about();
    }
    public function contact()
    {
        return $this->frontHomeRepo->contact();
    }
    public function course()
    {
        return $this->frontHomeRepo->course();
    }
    public function courseDetail($slug,$id)
    {
        return $this->frontHomeRepo->courseDetail($slug,(int)$id);
    }
    public function blog()
    {
        return $this->frontHomeRepo->blog();
    }
    public function blogPost($slug, $id)
    {
        return $this->frontHomeRepo->blogPost($slug, (int)$id);
    }
    public function shop()
    {
        return $this->frontHomeRepo->shop();
    }
    public function shopDetail($id)
    {
        return $this->frontHomeRepo->shopDetail((int)$id);
    }
    public function terms()
    {
        return $this->frontHomeRepo->terms();
    }
    public function privacy()
    {
        return $this->frontHomeRepo->privacy();
    }
    public function studyAbroad()
    {
        return $this->frontHomeRepo->studyAbroad();
    }
    // public function sitemap()
    // {
    //     return $this->frontHomeRepo->sitemap();
    // }
    // public function error404()
    // {
    //     return $this->frontHomeRepo->error404();
    // }
}
