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
    $path = storage_path('app/scribe/collection.json') ?? public_path('vendor/scribe/collection.json');
    dd([file_exists(storage_path('app/scribe/collection.json')), file_exists(public_path('vendor/scribe/collection.json'))]);
    if (file_exists($path)) {
        return response()->file($path);
    }

    return null;
})->name('scribe.postman');

Route::get('/docs/openapi', function() {
    $path = storage_path('app/scribe/openapi.yaml') ?? public_path('vendor/scribe/openapi.yaml');
    dd([file_exists(storage_path('app/scribe/openapi.yaml')), file_exists(public_path('vendor/scribe/openapi.yaml'))]);
    if (file_exists($path)) {
        return response()->file($path);
    }

    return null;
})->name('scribe.openapi');
