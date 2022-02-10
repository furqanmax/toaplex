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
use Illuminate\Support\Facades\Input;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/about-us', 'HomeController@about')->name('about');
Route::get('/contact-us', 'HomeController@contact')->name('contact');
Route::get('/all-services', 'HomeController@services')->name('all.services');
Route::get('/Web-Development', 'HomeController@web')->name('web');
Route::get('/App-Development', 'HomeController@app')->name('app');
Route::get('/Custom-Software-Development', 'HomeController@soft')->name('soft');
Route::get('/Seo-digital-marketing', 'HomeController@seo')->name('seo');
Route::get('/Projects', 'HomeController@project')->name('project');
Route::post('/contact', 'HomeController@mail')->name('mail');
