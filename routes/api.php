<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('fillter/products','ProductController@filterProduct');

Route::resource('categories','CategoryController');
Route::get('getcategories','CategoryController@getAllCategory');



Route::resource('products','ProductController');
Route::get('filter/products','ProductController@searchProductByName');

Route::resource('reviews','ReviewController');
Route::Post('users/{user_id}/reviews', 'ReviewController@store');
Route::get('products/{id}/reviews','ProductController@getProductReview');


Route::resource('addresses','AddressController');
Route::get('users/{user_id}/orders', 'TransactionController@getOrderByUser');

Route::resource('photoarrays','PhotoArrayController');
Route::get('products/{id}/photos','ProductController@getPhotosOfProduct');

Route::group([
    'middleware' => ['api'],
    'prefix' => 'auth'
], function ($router) {
    //Route::post('register', 'Auth\AuthController@register');
    Route::post('register', [ 'as' => 'register', 'uses' => 'Auth\AuthController@register']);
    Route::post('login', 'Auth\AuthController@login');
    Route::post('logout', 'Auth\AuthController@logout');
    Route::post('refresh', 'Auth\AuthController@refresh');
    Route::post('me', 'Auth\AuthController@me');
    Route::post('update/{id}', 'Auth\AuthController@updateUser');

});
