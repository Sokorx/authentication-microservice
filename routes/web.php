<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/docs', function () {
    return view('scribe.index');
});

Route::get('/docs/postman', function() {
    $path = public_path('scribe/collection.json');
    if (file_exists($path)) {
        return response()->file($path);
    }

    return null;
})->name('scribe.postman');

Route::get('/docs/openapi', function() {
    $path = public_path('scribe/openapi.yaml');
    if (file_exists($path)) {
        return response()->file($path);
    }

    return null;
})->name('scribe.openapi');
