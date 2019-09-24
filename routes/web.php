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

Route::group(['middleware' => 'isAdmin'], function () {
    Route::group(['prefix'=>'admin'], function () {
        Route::get('/products', 'AdminProductsController@index');
        Route::get('/products/new', 'AdminProductsController@create');
        Route::post('/products', 'AdminProductsController@store');
        Route::delete('/products/{id}', 'AdminProductsController@destroy');

        Route::put('/products/cover-image', 'ProductCoverImageController@update');
    });
});

Route::get('/products', 'ProductsController@index');
Route::get('/products/{id}', 'ProductsController@show');

Route::get('/products/{id}/comments', 'ProductCommentsController@index');
Route::post('/products/{id}/comments', 'ProductCommentsController@store');

Route::post('/comments/{id}/{rate}', 'CommentRatingsController@store');

Route::post('/products/{id}/wishlist', 'WishlistsController@store');


Route::get('/products/{id}/orders/new', 'OrdersController@create');
Route::post('/products/{id}/orders', 'OrdersController@store');

Route::get('/payment/success', 'PaymentSuccessController@index');








