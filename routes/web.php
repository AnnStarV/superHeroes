<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/modify', function () {
    return view('modify');
});

Route::get('/addheroe', function () {
    return view('addheroe');
});