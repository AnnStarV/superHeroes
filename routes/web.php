<?php

Route::get('/', function () {
    return view('addheroe');
})->name('addheroe');


Route::get('/home/{hero_id}/modify', 'AddheroController@modifyData')->name('modify');
Route::get('/home', 'AddheroController@allData')->name('home');
Route::get('/home/{hero_id}}', 'AddheroController@currData')->name('homeCurpost');
Route::get('/home/{hero_id}/delete', 'AddheroController@deleteData')->name('delete');

Route::post('/addheroe/submit', 'AddheroController@submit')->name('addheroe-form');
Route::post('/home/{hero_id}/modify', 'AddheroController@submitmodifyData')->name('modify-form');