<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::resource('index', 'IndexController');
Route::resource('blog', 'BlogController');
Route::resource('shop', 'ShopController');
Route::resource('contact', 'ContactController');
Route::resource('cart', 'CartController');
Route::resource('wishlist', 'WishlistController');
Route::get ('/account', 'AccountController@getIndex');
Route::post('/login', 'AccountController@login' );
Route::post('/register', 'AccountController@register' );
Route::get('/logout', 'AccountController@logout' );
//Route::resource('checkout', 'CheckoutController');

Route::get('/sitemap', 'SitemapController@index');
Route::get('/sitemap/posts', 'SitemapController@posts');
Route::get('/sitemap/categories', 'SitemapController@categories');
Route::get('/sitemap/podcasts', 'SitemapController@podcasts');

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function(){
    Route::resource('/user', 'UserController');
    Route::resource('/post', 'PostController');
});
