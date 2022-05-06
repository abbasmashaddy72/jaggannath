<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Department;
use App\Models\Insurance;
use App\Services\Helper;
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

    public function departments()
    {
        $data = Department::get();

        return view('pages.frontend.departments', compact('data'));
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
        $data = Insurance::get();

        return view('pages.frontend.insurance', compact('data'));
    }

    public function reviews()
    {
        return view('pages.frontend.reviews');
    }

    public function career()
    {
        $data = Helper::get_static_option('career_description');

        return view('pages.frontend.career', compact('data'));
    }

    public function privacy()
    {
        $data = Helper::get_static_option('privacy_description');

        return view('pages.frontend.privacy', compact('data'));
    }

    public function terms()
    {
        $data = Helper::get_static_option('terms_description');

        return view('pages.frontend.terms', compact('data'));
    }

    public function gallery()
    {
        return view('pages.frontend.gallery');
    }

    public function about_us()
    {
        $data = About::get();

        return view('pages.frontend.about_us', compact('data'));
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
