<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\LeaveController;
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

Route::get('/dashboard', [\App\Http\Controllers\PagesController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/calender' ,[\App\Http\Controllers\PagesController::class, 'calender'])->middleware(['auth', 'verified'])->name('calender');

Route::get('/tasks' ,[\App\Http\Controllers\PagesController::class, 'tasks'])->middleware(['auth', 'verified']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('works', TimeController::class);
Route::resource('verlof', LeaveController::class);



//Route::get('/admin/dashboard', [\App\Http\Controllers\PagesController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
