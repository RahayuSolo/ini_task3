<?php

Route::get('/', function(){ return redirect('/image'); });

Route::resource('/image', 'ImageController');

Route::DELETE('image/', 'ImageController@destroy'); 



//Route::get('/','ImageController@index')->name('root');

//Route::get('create','ImageController@create')->name('create');

//Route::post('create','ImageController@store');

//Route::resource('images','ImageController');