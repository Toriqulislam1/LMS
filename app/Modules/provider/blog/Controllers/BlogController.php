<?php

namespace App\Modules\provider\blog\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\provider\blog\Repositories\BlogRepositoryInterface;
use App\Modules\provider\blog\Requests\BlogRequest;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    protected $blogRepo;

    public function __construct(BlogRepositoryInterface $blogRepo)
    {
        $this->middleware('auth:admin');
        $this->blogRepo = $blogRepo;
    }

    public function index()
    {
        $blogs = $this->blogRepo->all()->map(function ($blog) {
            return [
                'id' => $blog->id,
                'name' => $blog->title,
                'image' => $blog->getFirstMediaUrl('thumbnail_blog') ?: asset('default-image.jpg'),
                'price' => $blog->price ? "$" . $blog->price : "Free",
                'discount' => $blog->discount ?? 'N/A',
                'startDate' => $blog->created_at->format('d M, Y'),
            ];
        });

        return view('provider.blog.index', compact('blogs'));
    }
    public function create()
    {
        return view('provider.blog.create');
    }
    public function store(BlogRequest $request)
    {
        $this->blogRepo->create($request->all());
        return redirect()->back()->with('success', 'Blog created successfully.');
    }
    public function edit($id)
    {
        $blog = $this->blogRepo->find($id);
        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }
        return view('provider.blog.edit', compact('blog'));
    }
    public function update(BlogRequest $request, $id)
    {
        $blog = $this->blogRepo->find($id);
        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }
        $this->blogRepo->update($id, $request->all());
        return redirect()->back()->with('success', 'Blog updated successfully.');
    }
    public function destroy($id)
    {
        $blog = $this->blogRepo->find($id);
        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }
        $this->blogRepo->delete($id);
        return redirect()->back()->with('success', 'Blog deleted successfully.');
    }

}
