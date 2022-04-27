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

    public function reports()
    {
        return view('pages.frontend.reports');
    }

    public function events()
    {
        return view('pages.frontend.events');
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
}
