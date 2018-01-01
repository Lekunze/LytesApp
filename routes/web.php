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

Route::resource('businesses','SMEController');
Route::resource('search','ProductController');

Route::post('login','Controller@login');
Route::post('/{sme}/shelf', 'DBController@shelf');
Route::delete('/{sme}/deleteShelf', 'DBController@deleteshelf');




Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/sme','DBController@sme');
Route::get('/goldilocks','PagesController@goldilocks');

Route::get('/business/{id}','DBController@smeguest');
Route::get('/register','PagesController@register');
//Route::get('/product','PagesController@product');
Route::get('login','PagesController@login');
Route::get('/success','PagesController@received');
Route::get('/signup','PagesController@signup');


//Route::get('/product/{sme}/{product}','DBController@product');
Route::get('/sme/{sme}','DBController@shop');
Route::get('/view-product','DBController@viewProduct');
Route::get('/view-sme','DBController@viewSME');



//Route::post('product', 'DBController@addProduct');
Route::post('store', 'DBController@store');
Route::post('changePassword', 'DBController@changePassword');
//Route::get('/mail', 'DBController@mail');

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
Route::get('/{sme}/new','DBController@newProduct');
Route::get('/change','DBController@change');
Route::get('/{sme}/shelves','DBController@shelves');
Route::post('/{sme}/shelves/edit','DBController@editShelf');
Route::get('/{sme}/products', 'DBController@products');


Route::get('/retrieve', 'DBController@retrieve');

Route::post('results', 'DBController@search');
//Route::get('/search', 'DBController@results');

Route::get('logout', 'PagesController@logout');
Route::get('/{sme}','DBController@sme');
Route::get('/{sme}/{product}','DBController@product');







