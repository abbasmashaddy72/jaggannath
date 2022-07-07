<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BookAppointment;
use App\Models\ContactUs;
use App\Models\Department;
use App\Models\Feedback;
use App\Models\Review;
use App\Models\Package;
use App\Models\Service;
use App\Models\Team;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        /**
         * @get('/admin/dashboard')
         * @name('admin.dashboard')
         * @middlewares('web', auth')
         */
        $Booked = BookAppointment::count();
        $BookedToday = BookAppointment::whereDate('created_at', Carbon::today())->count();
        $contactedUs = ContactUs::count();
        $contactedToday = ContactUs::whereDate('created_at', Carbon::today())->count();
        $blogsCount = Blog::count();
        $blogsViewSum = Blog::sum('clicks');
        $reviewsCount = Review::count();
        $servicesCount = Service::count();
        $departmentsCount = Department::count();
        $feedbacksToday = Feedback::whereDate('created_at', Carbon::today())->count();
        $feedbacks = Feedback::count();
        $doctorsCount = Team::count();
        $packagesCount = Package::count();

        return view('pages.backend.dashboard', compact([
            'Booked',
            'BookedToday',
            'contactedUs',
            'contactedToday',
            'blogsCount',
            'blogsViewSum',
            'reviewsCount',
            'servicesCount',
            'departmentsCount',
            'feedbacksToday',
            'feedbacks',
            'doctorsCount',
            'packagesCount'
        ]));
    }
}
