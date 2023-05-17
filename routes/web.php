<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\contentcontroller;
use App\Http\Controllers\mapelcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\adminMiddleware;
use Illuminate\Routing\Controllers\Middleware;

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
    return view('index');
});

Route::get('/materi', function () {
    return view('materi');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/admin', function () {
    return view('admin');
})->middleware([adminMiddleware::class]);

Route::get('/content', function () {
    return view('content');
});

Route::get('/login', [authcontroller::class, 'login']);
Route::post('/login', [authcontroller::class, 'autentikasi']);
Route::post('/logout', [authcontroller::class, 'logout']);

Route::resource('/content', contentcontroller::class)->middleware([adminMiddleware::class]);

Route::get('/view/{id}',[contentcontroller::class, 'pdfstream'])->middleware([adminMiddleware::class]);