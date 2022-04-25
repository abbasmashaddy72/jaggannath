<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'guest', 'namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::get('/', 'FrontendController@index')->name('homepage');
    Route::get('blogs', 'FrontendController@blogs')->name('blogs');
    Route::get('blog_single', 'FrontendController@blog_single')->name('blog_single');
    Route::get('services', 'FrontendController@services')->name('services');
    Route::get('service_single', 'FrontendController@service_single')->name('service_single');
    Route::get('teams', 'FrontendController@teams')->name('teams');
    Route::get('team_single', 'FrontendController@team_single')->name('team_single');
    Route::get('reports', 'FrontendController@reports')->name('reports');
    Route::get('events', 'FrontendController@events')->name('events');
    Route::get('about_us', 'FrontendController@about_us')->name('about_us');
    Route::get('contact_us', 'FrontendController@contact_us')->name('contact_us');
    Route::get('book_appointment', 'FrontendController@book_appointment')->name('book_appointment');
});

// 'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('homepage', 'HomePageController@index')->name('homepage');

    Route::resource('contact-us', 'ContactUsController')->only([
        'index', 'show'
    ]);

    Route::get('about-us', 'AboutUsController@index')->name('aboutUs');

    Route::resource('faq', 'FaqController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::resource('review', 'ReviewController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::resource('team', 'TeamController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::post('image_upload', 'MiscellaneousController@image_upload')->name('ckeditor.upload');

    Route::resource('blog', 'BlogController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::resource('feature', 'FeatureController')->only([
        'index', 'create', 'store',  'edit'
    ]);

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

require __DIR__ . '/auth.php';
