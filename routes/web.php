<?php

use App\Models\book;
use App\Models\mapel;
use App\Models\materi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\viewcontroller;
use App\Http\Middleware\adminMiddleware;
use App\Http\Controllers\mapelcontroller;
use App\Http\Controllers\contentcontroller;
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
    return view('materi', [
        'data' => mapel::all()
    ]);
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/admin', function () {
    return view('admin', [
        'mapel' => mapel::all(),
        'materi' => materi::all()
    ]);
})->middleware([adminMiddleware::class]);

Route::get('/content', function () {
    return view('content');
});

Route::get('/login', [authcontroller::class, 'login']);
Route::post('/login', [authcontroller::class, 'autentikasi']);
Route::post('/logout', [authcontroller::class, 'logout']);

Route::resource('/content', contentcontroller::class)->middleware([adminMiddleware::class]);
Route::get('/editmapel/{content}/edit', [contentcontroller::class, 'editmapel'])->middleware([adminMiddleware::class])->name('editmapel');
Route::put('/editmapel/{content}', [contentcontroller::class, 'patchmapel'])->middleware([adminMiddleware::class])->name('patchmapel');
Route::get('/editmateri/{content}/edit', [contentcontroller::class, 'editmateri'])->middleware([adminMiddleware::class])->name('editmateri');
Route::put('/editmateri/{content}', [contentcontroller::class, 'patchmateri'])->middleware([adminMiddleware::class])->name('patchmateri');

Route::resource('/submateri', viewcontroller::class);

Route::get('/view/{id}',[contentcontroller::class, 'pdfstream'])->middleware([adminMiddleware::class]);
Route::get('/pdf/{id}',[viewcontroller::class, 'pdfstream']);