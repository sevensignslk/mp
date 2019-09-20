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
    return view('welcome');
});


Route::get('/about', 'PageController@about')
    ->template(\App\Nova\Templates\About::class)
    ->name('About');


Route::get('/home', 'PageController@home')
    ->template(\App\Nova\Templates\Home::class)
    ->name('Home');

Route::get('/resources', 'PageController@resources')
    ->template(\App\Nova\Templates\Home::class)
    ->name('Resource');


Route::get('/empower-minitries', 'PageController@ministries')
    ->template(\App\Nova\Templates\Home::class)
    ->name('Ministry');

Route::get('/events', 'PageController@events')
    ->template(\App\Nova\Templates\Home::class)
    ->name('Events');


Route::get('/testimonials', 'PageController@testimonials')
    ->template(\App\Nova\Templates\Home::class)
    ->name('Testimonials');


Route::get('/jesus', 'PageController@jesus')
    ->template(\App\Nova\Templates\Home::class)
    ->name('Jesus');

Route::get('/connect', 'PageController@connect')
    ->template(\App\Nova\Templates\Home::class)
    ->name('Connect');