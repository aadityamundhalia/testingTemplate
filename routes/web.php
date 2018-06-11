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

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'edmdata' => 'EdmController',
    'webdata' => 'WebController'
]);

Route::get('/get_datatable', 'WebController@get_dataTables');
Route::post('/create_file', 'WebController@createFile');
Route::post('/pdf', 'WebController@getPdf');
Route::get('/export', 'WebController@export');
