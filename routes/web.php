<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('comingsoon');
});

Route::post('contact', 'ContactController@sendMessage');

Route::get('service1', function () {
    return view('modals.service-1-modal');
});

Route::get('service2', function () {
    return view('modals.service-2-modal');
});

Route::get('service3', function () {
    return view('modals.service-3-modal');
});

Route::get('service4', function () {
    return view('modals.service-4-modal');
});

Route::get('service5', function () {
    return view('modals.service-5-modal');
});

Route::get('service6', function () {
    return view('modals.service-6-modal');
});

Route::get('team1', function () {
    return view('modals.team-member-1-modal');
});

Route::get('team2', function () {
    return view('modals.team-member-2-modal');
});

Route::get('team3', function () {
    return view('modals.team-member-3-modal');
});
