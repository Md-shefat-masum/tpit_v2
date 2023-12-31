<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['prefix' => '', 'namespace' => "Livewire"], function () {
    //     Route::get('/', "ShowPosts");
    // Route::get('/login', "Login");
    // Route::get('/register', "Register");
// });

Route::group( ['prefix'=>'','namespace' => "Controllers" ],function(){
    Route::get('/', 'WebsiteController@index')->name("website");
    Route::get('/about', 'WebsiteController@about')->name("about");
    Route::get('/contact', 'WebsiteController@contact')->name("contact");
    Route::get('/courses', 'WebsiteController@courses')->name("courses");
    Route::get('/course/{slug}', 'WebsiteController@course_details')->name("course_details");

    Route::get('/gallery', 'WebsiteController@gallery')->name("gallery");
    Route::get('/blog', 'WebsiteController@blog')->name("blog");
    Route::get('/blog/{slug}', 'WebsiteController@blog_details')->name("blog_details");
    Route::get('/seminar', 'WebsiteController@seminar')->name("seminar");
    Route::get('/it-solution-services', 'WebsiteController@it_solution_services')->name("it_solution_services");
    Route::post('/seminar-registration', 'WebsiteController@registerSeminar')->name("registerSeminar");

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/course/enroll/{slug}', 'WebsiteController@course_enroll')->name("course_enroll");
        Route::post('/course/enroll/submit/{slug}', 'WebsiteController@course_enroll_submit')->name("course_enroll_submit");

        Route::group(['prefix' => ''], function() {
            // Route::get('/', 'WebsiteController@myCourse')->name("myCourse");
            Route::get('/my-course', 'WebsiteController@myCourse')->name("myCourse");
            Route::get('/my-course/{slug}', 'WebsiteController@myCourseDetails')->name("mycourse_details");
        });

        Route::group(['prefix' => 'course-manager'], function() {
            Route::get('/', 'Auth\CourseManagerController@dashboard')->name("course_manager_dashboard");
            Route::get('/courses', 'Auth\CourseManagerController@courses')->name("course_manager_courses");
            Route::get('/quizes', 'Auth\CourseManagerController@quizes')->name("course_manager_quizes");
        });
    });

    Route::get('/login', 'Auth\AuthController@login')->name('login');
    Route::post('/login', 'Auth\AuthController@login_submit')->name('login_sumbit');

    Route::post('logout', 'Auth\AuthController@logout_submit')->name('logout');

});



Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard')->middleware('auth');


Route::get('/data-reload', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--seed' => true]);
    \Illuminate\Support\Facades\Artisan::call('migrate', ['--path' => 'vendor/laravel/passport/database/migrations', '--force' => true]);
    \Illuminate\Support\Facades\Artisan::call('passport:install');
    return redirect('/');
});


