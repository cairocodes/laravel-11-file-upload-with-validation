<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('file-upload', [UploadController::class, 'index']);
Route::post('upload', [UploadController::class, 'store']);