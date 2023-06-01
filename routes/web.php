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

Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::get('/', 'FrontendController@index')->name('homepage');
    Route::get('departments', 'FrontendController@departments')->name('departments');
    Route::get('department/{id}', 'FrontendController@department_single')->name('department_single');
    Route::get('blogs', 'FrontendController@blogs')->name('blogs');
    Route::get('faqs', 'FrontendController@faqs')->name('faqs');
    Route::get('blog/{id}', 'FrontendController@blog_single')->name('blog_single');
    Route::get('services', 'FrontendController@services')->name('services');
    Route::get('service/{id}', 'FrontendController@service_single')->name('service_single');
    Route::get('doctors', 'FrontendController@teams')->name('teams');
    Route::get('doctor/{id}', 'FrontendController@team_single')->name('team_single');
    Route::get('insurance', 'FrontendController@insurance')->name('insurance');
    Route::get('packages', 'FrontendController@packages')->name('packages');
    Route::get('package/{id}', 'FrontendController@package_single')->name('package_single');
    Route::get('reviews', 'FrontendController@reviews')->name('reviews');
    Route::get('practice_places', 'FrontendController@practice_places')->name('practice_places');
    Route::get('gallery', 'FrontendController@gallery')->name('gallery');
    Route::get('about_us', 'FrontendController@about_us')->name('about_us');
    Route::get('contact_us', 'FrontendController@contact_us')->name('contact_us');
    Route::get('book_appointment/{team_id?}', 'FrontendController@book_appointment')->name('book_appointment');
    Route::get('feedback', 'FrontendController@feedback')->name('feedback');
    Route::get('terms', 'FrontendController@terms')->name('terms');
    Route::get('privacy', 'FrontendController@privacy')->name('privacy');
    Route::get('search', 'FrontendController@search')->name('search');
});

// 'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('user/permissions/{id}', 'UserController@permission_edit')->name('user.permissions.edit');
    Route::post('user/permissions/{id}', 'UserController@permission_save')->name('user.permissions.save');

    Route::resource('user', 'UserController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::get('homepage', 'HomePageController@index')->name('homepage');

    Route::get('terms', 'MiscellaneousController@terms')->name('terms');

    Route::get('privacy', 'MiscellaneousController@privacy')->name('privacy');

    Route::get('practice_places', 'MiscellaneousController@practice_places')->name('practice_places');

    Route::get('feedback', 'MiscellaneousController@feedback')->name('feedback');

    Route::resource('contact-us', 'ContactUsController')->only([
        'index', 'show'
    ]);

    Route::get('book-appointment', 'BookAppointmentController@index')->name('book.appointment');

    Route::resource('department', 'DepartmentController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('insurance', 'InsuranceController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('service', 'ServiceController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('slider', 'SliderController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('count', 'CountController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('review', 'ReviewController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('team', 'TeamController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::post('image_upload', 'MiscellaneousController@image_upload')->name('ckeditor.upload');

    Route::resource('blog', 'BlogController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('faq', 'FaqController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('package', 'PackageController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('package-list', 'PackageListController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::resource('feature', 'FeatureController')->only([
        'index', 'create', 'store',  'edit', 'show'
    ]);

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
        Route::middleware('can:gallery')->group(function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });
    });
});

require __DIR__ . '/auth.php';
