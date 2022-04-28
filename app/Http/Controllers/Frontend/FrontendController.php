<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $slider_images = [];

        return view('pages.frontend.home_page', compact('slider_images'));
    }

    public function blogs()
    {
        return view('pages.frontend.blogs');
    }

    public function blog_single()
    {
        return view('pages.frontend.blog_single');
    }

    public function services()
    {
        return view('pages.frontend.services');
    }

    public function service_single()
    {
        return view('pages.frontend.service_single');
    }

    public function teams()
    {
        return view('pages.frontend.teams');
    }

    public function insurance()
    {
        return view('pages.frontend.insurance');
    }

    public function reviews()
    {
        return view('pages.frontend.reviews');
    }

    public function career()
    {
        return view('pages.frontend.career');
    }

    public function gallery()
    {
        return view('pages.frontend.gallery');
    }

    public function about_us()
    {
        return view('pages.frontend.about_us');
    }

    public function contact_us()
    {
        return view('pages.frontend.contact_us');
    }

    public function book_appointment()
    {
        return view('pages.frontend.book_appointment');
    }

    public function feedback()
    {
        return view('pages.frontend.feedback');
    }
}
