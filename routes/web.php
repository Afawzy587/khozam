<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
    return redirect('/Home');
});
Route::get('locale/{locale}', function ($locale) {
    session::Put('locale', $locale);
    return redirect()->back();
})->name('locale');
Route::get('/Home','App\Http\Controllers\PagesController@index')->name('pages.home');
Route::get('/Projects','App\Http\Controllers\PagesController@project')->name('pages.projects');
Route::get('/Projects/{id}','App\Http\Controllers\PagesController@project_details')->name('pages.project_details');
Route::get('/about','App\Http\Controllers\PagesController@about')->name('pages.about');
Route::get('/Media','App\Http\Controllers\PagesController@media')->name('pages.media');
Route::get('/Career','App\Http\Controllers\PagesController@jobs')->name('pages.career');
Route::get('/Contact','App\Http\Controllers\PagesController@contact')->name('pages.contact');
Route::post('/contact_us','App\Http\Controllers\Contact_usController@store');
Route::post('/contact_latter','App\Http\Controllers\Contact_usController@contact_latter');
Route::post('/join_us','App\Http\Controllers\Join_usController@store');
Route::post('/contact_buy','App\Http\Controllers\Contact_us_buysController@store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
