<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

#Route::post('/register', 'Api\AuthController@register');
#Route::post('/login', 'Api\AuthController@login');








/*Route::group(['prefix' => 'products'], function () {
    
    Route::apiResource('/{products}/reviews','ReviewController');
   
});*/



Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user', function (Request $request) {
    return $request->user();
    });
    // Products
    Route::apiResource('/products','ProductController');    

    //Reviews
    Route::apiResource('/{products}/reviews','ReviewController');
});



