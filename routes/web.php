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

Route::get('/mypage/introduction', function () {
    return view('mypage/introduction');
});
//Route::get('/mypage/diary','DiaryController@index');
//Route::get('/mypage/diary/create','DiaryController@create')->name('diary.create');
//Route::post('/mypage/diary/upload', 'DiaryController@upload');
//Route::get('/mypage/diary/{id}/edit', 'DiaryController@edit')->name('diary.edit');
//Route::post('/mypage/diary/{id}/updata', 'DiaryController@updata')->name('diary.updata');

Route::group(['middleware' => 'auth.very_basic'], function() {

    Route::get('/mypage/information', function () {
        return view('mypage/information');
    });
    Route::post('/mypage/information/upload', 'DiaryController@testupload');

});


//Route::get('/mypage/collection', function () {
//    return view('mypage/collection');
//});
Route::get('/mypage/diary', function () {
    return view('mypage/collection');
});
Route::get('/mypage/collection','DiaryController@index');


Route::get('/mypage/collection/board', function () {
    return view('mypage/collection/board');
});
