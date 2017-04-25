<?php

Route::get('/', function(){ return redirect('/image'); });

Route::resource('/image', 'ImageController');

Route::get ('delete','ImageController@delete')->name('delete'); 



//Route::get('/','ImageController@index')->name('root');

//Route::get('create','ImageController@create')->name('create');

//Route::post('create','ImageController@store');

//Route::resource('images','ImageController');