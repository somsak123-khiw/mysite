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
    $title="what's up!!!";
    $content="welcome to mysite.test";
    return view('welcome')->with([
        'title' => $title,
        'content' => $content,
        ]); 
})->name('home');
Route::get('/contact', function () {
    $title="what's up!!!";
    $content="welcome to contact";
    return view('welcome')->with([
        'title' => $title,
        'content' => $content,
        ]);
})->name('contact')->middleware('auth');
Route::get('/about', function () {
    $title="what's up!!!";
    $content="welcome to about";
    return view('welcome')->with([
        'title' => $title,
        'content' => $content,
        ]);
})->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
