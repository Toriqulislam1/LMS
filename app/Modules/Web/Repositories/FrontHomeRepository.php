<?php
namespace App\Modules\Web\Repositories;

use App\Models\GeneralSetting;
use App\Modules\Web\Repositories\FrontHomeRepositoryInterface;
use App\Modules\Provider\course\Repositories\CourseRepositoryInterface;


class FrontHomeRepository implements FrontHomeRepositoryInterface{

    protected $courseRepository;

    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
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
        return view('web.pages.blog.index', compact('generalSettings', 'pageTitle'));
    }
    public function blogPost($slug) {
        $pageTitle = 'Blog Post';
        $generalSettings = $this->generalSettings();
        return view('web.pages.blog-post', compact('generalSettings', 'slug', 'pageTitle'));
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
    // public function sitemap() {
    //     return view('web.sitemap');
    // }
    // public function error404() {
    //     return view('web.error404');
    // }
}
