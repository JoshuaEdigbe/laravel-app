<?php


Route::group(['middleware' => ['web']], function () {
   Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 

});


Route::get('/manage-users', function () {
    return view('manage-users');
});