<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {return view('layout/master');});
Route::get('/', function () {return view('go');});
Route::get('/questions', function () {return view('quizzPublic');})->name('goQuiz');
Route::get('/results', function () {return view('resultPublic');});

Route::get('/admin/results', [App\Http\Controllers\HomeController::class, 'resultAdmin'])->name('resultAdmin');
Route::get('/admin/questions', [App\Http\Controllers\HomeController::class, 'questAdmin'])->name('questAdmin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin', [AdminController::class, 'index'])->name('admin');