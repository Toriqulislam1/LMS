<?php
namespace App\Modules\Web\Repositories;

use App\Models\GeneralSetting;
use App\Modules\provider\blog\Repositories\BlogRepositoryInterface;
use App\Modules\Web\Repositories\FrontHomeRepositoryInterface;
use App\Modules\Provider\course\Repositories\CourseRepositoryInterface;


class FrontHomeRepository implements FrontHomeRepositoryInterface{

    protected $courseRepository;
    protected $blogRepository;
    
    public function __construct(CourseRepositoryInterface $courseRepository,BlogRepositoryInterface $blogRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->blogRepository = $blogRepository;
    }

    public function home() {
        $pageTitle = 'Home';
        $generalSettings = $this->generalSettings();
        $courses = $this->courseRepository->frontendGetCourses();
        return view('web.home', compact('generalSettings', 'pageTitle', 'courses'));
    }
    public function about() {
        $pageTitle = 'About Us';
        $generalSettings = $this->generalSettings();
        return view('web.pages.about.index', compact('generalSettings', 'pageTitle'));
    }
    public function contact() {
        $pageTitle = 'Contact Us';
        $generalSettings = $this->generalSettings();
        return view('web.pages.contact.index', compact('generalSettings', 'pageTitle'));
    }
    public function course() {
        $pageTitle = 'Courses';
        $courses = $this->courseRepository->frontendGetCourses();
        $generalSettings = $this->generalSettings();

        return view('web.pages.course.index', compact('generalSettings', 'courses', 'pageTitle'));
    }
    public function courseDetail($slug,$id) {
        $pageTitle = 'Course Detail';
        $course = $this->courseRepository->find($id);
        $generalSettings = $this->generalSettings();
        return view('web.pages.course.detail', compact('generalSettings', 'course', 'pageTitle'));
    }
    public function blog() {
        $pageTitle = 'Blog';
        $generalSettings = $this->generalSettings();
        $blogs = $this->blogRepository->frontGetAllBlogs();
        return view('web.pages.blog.index', compact('generalSettings', 'pageTitle', 'blogs'));
    }
    public function blogPost($slug, $id) {
        $pageTitle = 'Blog Post';
        $generalSettings = $this->generalSettings();
        $blog = $this->blogRepository->find($id);
        return view('web.pages.blog.details', compact('generalSettings', 'slug', 'pageTitle', 'blog'));
    }
    public function shop() {
        $pageTitle = 'Shop';
        $generalSettings = $this->generalSettings();
        return view('web.pages.shop.index', compact('generalSettings', 'pageTitle'));
    }
    public function terms() {
        $pageTitle = 'Terms and Conditions';
        $generalSettings = $this->generalSettings();
        return view('web.pages.terms.index', compact('generalSettings', 'pageTitle'));
    }
    public function privacy() {
        $pageTitle = 'Privacy Policy';
        $generalSettings = $this->generalSettings();
        return view('web.pages.privacy.index', compact('generalSettings', 'pageTitle'));
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
    public function studyAbroad() {
        $pageTitle = 'Study Abroad';
        $generalSettings = $this->generalSettings();
        return view('web.pages.studyAbroad.index', compact('generalSettings', 'pageTitle'));
    }
    
    // public function sitemap() {
    //     return view('web.sitemap');
    // }
    // public function error404() {
    //     return view('web.error404');
    // }
}
