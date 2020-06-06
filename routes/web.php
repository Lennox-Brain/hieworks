<?php

use Illuminate\Http\Request;
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


Route::group(['prefix'=>'dashboard'], function(){
    Route::group(['middleware'=>'auth'],function(){
        Route::get('/account', 'Dashboard\LoaderController@loadAccount')->name('user:account');
        Route::get('/jobs', 'Dashboard\LoaderController@loadJobs')->name('user:jobs');
        Route::view('/postjob', 'layouts.postjob')->name('user:postjob');
        Route::get('/notifications', 'Dashboard\LoaderController@loadNotifications')->name('user:notifications');
        Route::get('/settings', 'Dashboard\LoaderController@loadSettings')->name('user:settings');
        Route::get('/edit/job/{id}', 'Dashboard\LoaderController@loadJobEdit')->name('edit:job');
        Route::post('/settings', 'Dashboard\UpdateController@updateUserSettings')->name('post:settings');
        Route::get('/application/{job_title}/{id}', 'Dashboard\LoaderController@loadApplications')->name('user:applications');
       
        
        Route::post('/postjob', 'PostController@postJob')->name('post:postjob');
        Route::post('/update/job/', 'Dashboard\UpdateController@updateJobPost')->name('update:jobpost');

        Route::get('/remove/application/{id}', 'Dashboard\DeleteController@deleteApplication')->name('delete:application');
        Route::get('/remove/job/{id}', 'Dashboard\DeleteController@deleteJob')->name('delete:job');

    });

});




Route::view('/','layouts.home')->name('home');

// post routes 
Route::post('/job/apply/confirm', 'PostController@confirmApplication')->name('confirm:application');

Route::view('application/info', 'layouts.applicationcallback')->name('application:callback');
Route::get('/job/apply/{id}', 'GetController@applyJob')->name('apply:job');
Route::get('/jobs', 'GetController@jobs')->name('jobs');
Route::get('/job/{title}/{id}', 'GetController@jobInfo')->name('jobinfo');
Route::get('/search', 'GetController@searchJob')->name('search');
Route::get('/filter', 'GetController@filterJob')->name('filter');
Route::get('/category/{category}', 'GetController@jobCategories')->name('category');
Route::post('/newsletter', 'PostController@newsletter')->name('newsletter');


// auth routes 
Route::view('/login', 'layouts.login')->name('login');
Route::view('/register', 'layouts.register')->name('register');
Route::get('/account/logout', 'Auth\LoginController@logout')->name('user:logout');


Route::post('/authentication', 'Auth\LoginController@authenticate')->name('auth');
Route::post('/signup', 'Auth\RegisterController@signUp')->name('signup');

// password reset 

//shows password reset form
Route::view('/reset/password', 'layouts.forgotpassword')->name('forgotpassword'); 

// post request for password reset link to email
Route::post('/reset/password/link', 'Auth\ForgotPasswordController@sendPasswordResetLink')->name('passwordreset:link'); 

// shows password reset confirmation form
Route::get('/confirm/password/reset/{id}', 'Auth\ResetPasswordController@confirmPasswordResetLink')->name('confirm:passwordreset');

//post to finally reset password
Route::post('/confirm/password/reset', 'Auth\ResetPasswordController@resetPassword')->name('reset:password');

Route::view('/terms', 'extras.terms')->name('terms');
Route::view('/policy', 'extras.policy')->name('policy');
Route::view('/sitemap', 'extras.sitemap')->name('sitemap');
Route::view('/about', 'extras.about')->name('about');
Route::view('/faq', 'extras.faq')->name('faq');


Route::view('/forget', 'mails.newsletter2');

// Route::fallback(function(){
//     return view('layouts.404');
// });