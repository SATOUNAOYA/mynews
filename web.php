<?php
Route::group(['prefix' => 'admin'], function() {
Route::get('news/admin','Admin\ProfileController@edit');
Route::get('news/profile','Admin\ProfileController@edit');
Route::get('news/edit','Admin\ProfileController@edit');
});

