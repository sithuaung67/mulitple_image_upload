<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'FormController@index');
Route::post('upload_data', 'FormController@store');
