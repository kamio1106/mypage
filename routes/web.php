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

Route::get('/mypage', function () {
    return view('mypage/index');
});
Route::get('/mypage/introduction', function () {
    return view('mypage/introduction');
});
Route::get('/mypage/diary','DiaryController@index');
Route::post('/mypage/diary/upload', 'DiaryController@upload');
Route::get('/mypage/collection', function () {
    return view('mypage/collection');
});
Route::get('/mypage/information', function () {
    return view('mypage/information');
});
Route::get('/mypage/collection/board', function () {
    return view('mypage/collection/board');
});
