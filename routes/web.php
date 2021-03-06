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

Route::get('/', [
    'uses'=>'TestController@welcome'
]);

Route::get('/about', [
    'uses'=>'TestController@about',
    'as' => 'about'
]);

Route::get('bagas', function () {
    return 'string' ;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
