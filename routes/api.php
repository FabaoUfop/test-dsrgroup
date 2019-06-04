<?php

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

Route::group(['prefix' => 'v1','namespace'=>'Api','middleware' => 'auth:api'],function () {
    Route::get('auth/user', 'UserController@authenticated');
});
Route::group(['prefix'=>'v1'],function () {
    Route::post('register','Api\V1\Admin\MembersController@store');
    Route::post('upload','Api\V1\Admin\MembersController@upload');
});

Route::group(['prefix' => 'v1/admin','namespace'=>'Api\V1\Admin','middleware' => 'auth:api'],function (){
    /*Users*/
    Route::post('user','UserController@store');
    Route::get('user','UserController@index');
    Route::get('user/{id}','UserController@edit');
    Route::put('user/{id}','UserController@update');
    Route::delete('user/{id}','UserController@delete');
    /*Members*/
    Route::post('member','MemberController@store');
    Route::get('members','MemberController@index');
    Route::get('member/{id}','MemberController@edit');
    Route::put('member/{id}','MemberController@update');
    Route::delete('member/{id}','MemberController@delete');
    Route::put('member/update/{id}','MemberController@update');
});
