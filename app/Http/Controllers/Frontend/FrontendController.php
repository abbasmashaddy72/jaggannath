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
        /**
         * @get('/')
         * @name('homepage')
         * @middlewares('web')
         */
        $slider_images = [];

        return view('pages.frontend.home_page', compact('slider_images'));
    }

    public function departments()
    {
        /**
         * @get('/departments')
         * @name('departments')
         * @middlewares('web')
         */
        $data = Department::get();

        return view('pages.frontend.departments', compact('data'));
    }

    public function blogs()
    {
        /**
         * @get('/blogs')
         * @name('blogs')
         * @middlewares('web')
         */
        return view('pages.frontend.blogs');
    }

    public function blog_single()
    {
        /**
         * @get('/blog_single')
         * @name('blog_single')
         * @middlewares('web')
         */
        return view('pages.frontend.blog_single');
    }

    public function services()
    {
        /**
         * @get('/services')
         * @name('services')
         * @middlewares('web')
         */
        return view('pages.frontend.services');
    }

    public function service_single()
    {
        /**
         * @get('/service_single')
         * @name('service_single')
         * @middlewares('web')
         */
        return view('pages.frontend.service_single');
    }

    public function teams()
    {
        /**
         * @get('/teams')
         * @name('teams')
         * @middlewares('web')
         */
        return view('pages.frontend.teams');
    }

    public function insurance()
    {
        /**
         * @get('/insurance')
         * @name('insurance')
         * @middlewares('web')
         */
        $data = Insurance::get();

        return view('pages.frontend.insurance', compact('data'));
    }

    public function packages()
    {
        return view('pages.frontend.packages');
    }

    public function reviews()
    {
        /**
         * @get('/reviews')
         * @name('reviews')
         * @middlewares('web')
         */
        return view('pages.frontend.reviews');
    }

    public function career()
    {
        /**
         * @get('/career')
         * @name('career')
         * @middlewares('web')
         */
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
        /**
         * @get('/gallery')
         * @name('gallery')
         * @middlewares('web')
         */
        return view('pages.frontend.gallery');
    }

    public function about_us()
    {
        /**
         * @get('/about_us')
         * @name('about_us')
         * @middlewares('web')
         */
        $data = About::get();

        return view('pages.frontend.about_us', compact('data'));
    }

    public function contact_us()
    {
        /**
         * @get('/contact_us')
         * @name('contact_us')
         * @middlewares('web')
         */
        return view('pages.frontend.contact_us');
    }

    public function book_appointment()
    {
        /**
         * @get('/book_appointment')
         * @name('book_appointment')
         * @middlewares('web')
         */
        return view('pages.frontend.book_appointment');
    }

    public function feedback()
    {
        /**
         * @get('/feedback')
         * @name('feedback')
         * @middlewares('web')
         */
        return view('pages.frontend.feedback');
    }
}
