<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Count;
use App\Models\Department;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Insurance;
use App\Models\Package;
use App\Models\Review;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Services\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    public function __construct()
    {
        view()->share('logo', Helper::get_static_option('logo'));
        view()->share('twitter', Helper::get_static_option('twitter'));
        view()->share('facebook', Helper::get_static_option('facebook'));
        view()->share('instagram', Helper::get_static_option('instagram'));
        view()->share('linkedin', Helper::get_static_option('linkedin'));
        view()->share('youtube', Helper::get_static_option('youtube'));
        view()->share('google_business', Helper::get_static_option('google_business'));
        view()->share('embed_map_link', Helper::get_static_option('embed_map_link'));
        view()->share('email', Helper::get_static_option('email'));
        view()->share('contact_no', explode(';', Helper::get_static_option('contact_no')));
        view()->share('address', Helper::get_static_option('address'));
    }

    public function index()
    {
        /**
         * @get('/')
         * @name('homepage')
         * @middlewares('web')
         */
        $slider_images = Slider::where('on', 'homepage')->get();
        $count_excerpt = Helper::get_static_option('count_excerpt');
        $review_excerpt = Helper::get_static_option('review_excerpt');
        $team_excerpt = Helper::get_static_option('team_excerpt');
        $counts = Count::where('on', 'homepage')->get();
        $gr_api = Helper::get_static_option('gr_api');
        $gr_count_api = Helper::get_static_option('gr_count_api');
        $tag_line = Helper::get_static_option('tag_line');
        $hero_image = Helper::get_static_option('hero_image');
        $hero_video = Helper::get_static_option('hero_video');
        $features = Feature::get();
        $welcome_message = Helper::get_static_option('welcome_message');
        $mission_message = Helper::get_static_option('mission_message');
        $vision_message = Helper::get_static_option('vision_message');
        $departments = Department::get();

        return view('pages.frontend.home_page', compact([
            'slider_images',
            'count_excerpt',
            'review_excerpt',
            'team_excerpt',
            'counts',
            'gr_api',
            'gr_count_api',
            'tag_line',
            'hero_image',
            'hero_video',
            'features',
            'welcome_message',
            'mission_message',
            'vision_message',
            'departments'
        ]));
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

    public function department_single($id)
    {
        $data = Department::findOrFail($id);
        $services = Service::where('department_id', $id)->get();
        $teams = Team::inRandomOrder()->where('department_id', $id)->with('department')->get();

        return view('pages.frontend.department_single', compact('data', 'services', 'teams'));
    }

    public function faqs()
    {
        /**
         * @get('/faqs')
         * @name('faqs')
         * @middlewares('web')
         */
        $data = Faq::all();

        return view('pages.frontend.faqs', compact('data'));
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

    public function blog_single($id)
    {
        /**
         * @get('/blog_single')
         * @name('blog_single')
         * @middlewares('web')
         */
        Blog::where('id', $id)->increment('clicks');
        $data = Blog::findOrFail($id);
        $related = Blog::where('department_id', $data->department_id)->whereNotIn('id', [$data->id])->with('department', 'team')->orderBy('clicks', 'DESC')->limit(3)->get();

        return view('pages.frontend.blog_single', compact('data', 'related'));
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

    public function service_single($id)
    {
        /**
         * @get('/service_single')
         * @name('service_single')
         * @middlewares('web')
         */
        Service::where('id', $id)->increment('clicks');
        $data = Service::with('department')->findOrFail($id);
        $related = Service::where('department_id', $data->department_id)->whereNotIn('id', [$data->id])->with('department')->orderBy('clicks', 'DESC')->get();
        $teams = Team::inRandomOrder()->where('department_id', $data->department_id)->with('services', 'department')->get();

        return view('pages.frontend.service_single', compact('data', 'related', 'teams'));
    }

    public function teams()
    {
        /**
         * @get('/teams')->limit(3)
         * @name('teams')
         * @middlewares('web')
         */
        return view('pages.frontend.teams');
    }

    public function team_single($id)
    {
        $data = Team::inRandomOrder()->with('services')->findOrFail($id);
        $related = Team::inRandomOrder()->where('department_id', $data->department_id)->with('department')->whereNotIn('id', [$data->id])->get();

        return view('pages.frontend.team_single', compact('data', 'related'));
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
        $data = Package::get();

        return view('pages.frontend.packages', compact('data'));
    }

    public function package_single($id)
    {
        $data = Package::with('packages')->findOrFail($id);

        return view('pages.frontend.package_single', compact('data'));
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

    public function practice_places()
    {
        /**
         * @get('/practice_place')
         * @name('practice_place')
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
        $dir = Storage::disk('public')->directories('files');

        for ($i = 0; $i < count($dir); $i++) {
            $directories[$i] = Storage::disk('public')->directories($dir[$i]);
        }

        $directories = array_filter($directories);
        $directories = Arr::flatten($directories);
        sort($directories);

        return view('pages.frontend.gallery', compact('directories'));
    }

    public function about_us()
    {
        /**
         * @get('/about_us')
         * @name('about_us')
         * @middlewares('web')
         */
        $welcome_message = Helper::get_static_option('welcome_message');
        $mission_message = Helper::get_static_option('mission_message');
        $vision_message = Helper::get_static_option('vision_message');
        $tag_line = Helper::get_static_option('tag_line');
        $hero_image = Helper::get_static_option('hero_image');
        $hero_video = Helper::get_static_option('hero_video');

        return view('pages.frontend.about_us', compact(
            'tag_line',
            'welcome_message',
            'mission_message',
            'vision_message',
            'hero_image',
            'hero_video'
        ));
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

    public function book_appointment($tem_id = null)
    {
        /**
         * @get('/book_appointment')
         * @name('book_appointment')
         * @middlewares('web')
         */
        $team_id = $tem_id;

        return view('pages.frontend.book_appointment', compact('team_id'));
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

    public function search(Request $request)
    {
        $search_text = $request->search;
        $departments = Department::where('name', 'LIKE', '%' . $search_text . '%')->get();
        $teams = Team::inRandomOrder()->where('name', 'LIKE', '%' . $search_text . '%')->with('services', 'department')->get();
        $services = Service::where('title', 'LIKE', '%' . $search_text . '%')->with('department')->get();
        $blogs = Blog::where('title', 'LIKE', '%' . $search_text . '%')->with('department', 'team')->orderBy('clicks', 'DESC')->get();
        $packages = Package::where('name', 'LIKE', '%' . $search_text . '%')->get();
        $reviews = Review::where('name', 'LIKE', '%' . $search_text . '%')->get();
        $insurances = Insurance::where('name', 'LIKE', '%' . $search_text . '%')->get();

        return view('pages.frontend.search', compact([
            'search_text',
            'departments',
            'teams',
            'services',
            'blogs',
            'packages',
            'reviews',
            'insurances'
        ]));
    }
}
