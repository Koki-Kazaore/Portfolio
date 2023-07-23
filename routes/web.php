<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebugController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// デバッグ用
Route::get('/debug', [DebugController::class, 'input']);
Route::post('/output', [DebugController::class, 'output']);

// 初期設定ルーティング
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/works', function () {
    return view('works');
})->name('works');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('/articles', function() {
    return view('articles');
})->name('articles');
