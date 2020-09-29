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
Route::get('dang-nhap', ['as' => 'dangnhap', 'uses' => 'Page\accountController@login']);
Route::get('dang-ky', ['as' => 'dangky', 'uses' => 'Page\accountController@Register']);
Route::post('post-login', ['as' => 'post.login', 'uses' => 'Page\accountController@postLogin']);
Route::group(['prefix' => '/', 'middleware' => 'auth-user'], function () {
    Route::get('trang-chu', ['as' => 'trangchu', 'uses' => 'Page\pageController@showPage']);
    Route::get('xem-video', ['as' => 'xemvideo', 'uses' => 'Page\pageController@showPageWatchVideo']);
    Route::get('dang-xuat', ['as' => 'dangxuat', 'uses' => 'Page\accountController@logout']);
    Route::get('rut-tien', ['as' => 'ruttien', 'uses' => 'Page\pageController@ruttien']);
    Route::get('error-video', ['as' => 'error.video', 'uses' => 'Page\pageController@showError']);
    Route::get('home-ref', ['as' => 'home.ref', 'uses' => 'Page\pageController@showHomeRef']);
});
