<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomePageController extends Controller
{
    public function index()
    {
        /**
         * @get('/admin/homepage')
         * @name('admin.homepage')
         * @middlewares('web', auth')
         */
        abort_if(Gate::denies('homepage'), 403);

        return view('pages.backend.home_page');
    }
}
