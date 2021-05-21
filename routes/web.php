<?php

Route::get('/', function () {
    return view('addheroe');
})->name('addheroe');

Route::get('/modify', function () {
    return view('modify');
})->name('modify');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/addheroe/submit', 'AddheroController@submit')->name('addheroe-form');
