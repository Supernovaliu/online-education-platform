<?php

use Illuminate\Support\Facades\Route;

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
//do not need to check permission
Route::group(['prefix' => 'admin'], function () {
    //login page
    Route::get('public/login','Admin\PublicController@login');
    //login processing page
    Route::post('public/check','Admin\PublicController@check');

    //logout
    Route::get('public/logout','Admin\PublicController@logout');

});
//need to check permission
Route::group(['prefix' => 'admin'], function () {

    //homepage of backend
    Route::get('index/index','Admin\IndexController@index');
    Route::get('index/welcome','Admin\IndexController@welcome');
    //administrator management module
    Route::get('manager/index','Admin\ManagerController@index');
    //authentication management module
    Route::get('auth/index','Admin\AuthController@index');
    Route::any('auth/add','Admin\AuthController@add');
});
