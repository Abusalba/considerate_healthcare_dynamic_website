<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\ContactRequest;
use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Traits\FileTraits;
use Exception;



class HomeController extends Controller
{
    use FileTraits;
    public function home()
    {
        $blogs = Blog::latest()->take(3)->get();
        return view('web.home', compact('blogs'));
    }
    public function aboutUs()
    {
        $abouts = About::first();
        return view('web.about', compact('abouts'));
    }
    public function whyChooseUs()
    {
        return view('web.why-choose-us');
    }
    public function faq()
    {
        return view('web.faq');
    }
    public function career()
{
    return view('web.career');
}
    public function contact()
    {
        return view('web.contact');
    }  
    
    public function blogs()
    {
        $blogs = Blog::all();

        return view('web.blogs', compact('blogs'));
    }
    public function blogsDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $latestBlogs = Blog::latest()->take(3)->get();

        return view('web.blogs_detail', compact('blog', 'latestBlogs'));
    }

    public function contactStore(ContactRequest $request)
    {
        try {
            $data = $request->only('name', 'email', 'phone', 'subject', 'description');
            Contact::create($data);
            return $this->successResponse('Form submitted successfully!');
        } catch (\Exception $e) {
            return $this->errorResponse('Something went wrong.');
        }
    }

}
