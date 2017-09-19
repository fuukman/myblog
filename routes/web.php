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


Auth::routes();

Route::get('/','ArtikelController@timeline');
Route::get('/{title}','ArtikelController@detailTimeline');
Route::get('/tags/{tags}','ArtikelController@listTags')->name('tags');
Route::post('langganan','LanggananController@simpan')->name('langganan');

Route::prefix('panel')->middleware('auth')->group(function () {
    Route::get('dashboard/', 'PanelController@dashboard');
    Route::get('post/', 'PanelController@create');
    Route::get('posted/', 'PanelController@created');
    Route::get('posted/edit/{id}', 'PanelController@getEdit');
    Route::post('posted/edit/{id}', 'PanelController@postEdit');
    Route::get('posted/hapus/{id}', 'PanelController@created');
    Route::post('posted/save', 'PanelController@savePost')->name('posted');
});