<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('main-sec', function () {
    return view('index-sec');
});
Route::get('about-us', function () {
    return view('about-us');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('documentation', function () {
    return view('documentation');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('news-left-sidebar', function () {
    return view('news-left-sidebar');
});
Route::get('news-right-sidebar', function () {
    return view('news-right-sidebar');
});
Route::get('news-single', function () {
    return view('news-single');
});
Route::get('pricing', function () {
    return view('pricing');
});
Route::get('projects', function () {
    return view('projects');
});
Route::get('projects-single', function () {
    return view('projects-single');
});
Route::get('service-single', function () {
    return view('service-single');
});
Route::get('services', function () {
    return view('services');
});
Route::get('team', function () {
    return view('team');
});
Route::get('testimonials', function () {
    return view('testimonials');
});
Route::get('typography', function () {
    return view('typography');
});
Route::get('404', function () {
    return view('errors.404');
});
Route::get('blade', function () {
    return view('child');
});
