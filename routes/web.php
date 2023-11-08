<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\DropzoneController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('dropzone/save', 'DropzoneController@save');