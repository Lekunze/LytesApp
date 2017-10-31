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

/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    //return view('welcome');
    return "<h2>Lytes App</h2>";
});*/

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/sme','PagesController@sme');
Route::get('/register','PagesController@register');
//Route::get('/product','PagesController@product');
Route::get('/login','PagesController@login');
Route::get('/received','PagesController@received');
Route::get('/signup','PagesController@signup');


Route::post('store', 'DBController@store');
Route::post('customer','DBController@new_customer');
Route::post('customer_login','DBController@customer_login');
Route::post('business_login','DBController@business_login');
Route::post('admin_login','DBController@admin_login');

Route::get('/home', 'PagesController@home');

Route::get('/admin','PagesController@admin_login');
Route::get('/dashboard','PagesController@admin_dashboard');
Route::get('/profile/{id}','DBController@profile');

Route::get('/dashboard/approve/{id}', 'DBController@approve');
Route::get('/dashboard/reject/{id}', 'DBController@reject');

//SME Page routing
Route::get('/sme/manage','PagesController@sme');
Route::get('/new','PagesController@new_pdt');
Route::get('/change','PagesController@change');

Route::get('/retrieve', 'DBController@retrieve');

Route::post('search', 'DBController@search');
Route::get('/results', 'DBController@results');


