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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
    Route::get('/', 'IndexController')->name('user.index');
    Route::get('/create', 'CreateController')->name('user.create');
    Route::post('/', 'StoreController')->name('user.store');
});
Route::group(['namespace' => 'Good', 'prefix' => 'goods'], function () {
    Route::get('/', 'IndexController')->name('good.index');
    Route::get('/create', 'CreateController')->name('good.create');
    Route::post('/', 'StoreController')->name('good.store');
    Route::get('/{good}/edit', 'EditController')->name('good.edit');
    Route::patch('/{good}', 'UpdateController')->name('good.update');
    Route::delete('/{good}', 'DeleteController')->name('good.delete');
});
