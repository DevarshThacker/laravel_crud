<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/users', function () {
//     return view('users.index');
// });

Route::resource('Users', UsersController::class);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');



