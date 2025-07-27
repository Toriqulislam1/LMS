<?php
namespace App\Modules\Web\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Web\Repositories\FrontHomeRepositoryInterface;

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
    public function blog()
    {
        return $this->frontHomeRepo->blog();
    }
    public function blogPost($slug)
    {
        return $this->frontHomeRepo->blogPost($slug);
    }
    public function shop()
    {
        return $this->frontHomeRepo->shop();
    }
    public function terms()
    {
        return $this->frontHomeRepo->terms();
    }
    public function privacy()
    {
        return $this->frontHomeRepo->privacy();
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
