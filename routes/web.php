<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('/admin')->middleware(['auth'])->group(function (){
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
