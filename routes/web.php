<?php

Route::get('/', function () {
    return view('addheroe');
});

Route::get('/modify', function () {
    return view('modify');
});

Route::get('/home', function () {
    return view('home');
});