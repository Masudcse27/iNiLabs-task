<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;

Route::get('login',[SignInController::class,'index'])->name('login');
Route::post('login',[SignInController::class,'login'])->name('login');
Route::get('signup',[SignUpController::class,'index'])->name('signup');
Route::post('signup',[SignUpController::class,'store'])->name('signup');
Route::get('/',[HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/logout',[SignInController::class, 'logout'])->name('logout');
    Route::get('/profile',[ProfileController::class, 'index'])->name('profile');
    Route::post('/make_post',[PostController::class, 'makepost'])->name('make_post');
    Route::get('/delete/{id}', [PostController::class, 'deletepost'])->name('delete_post');
    Route::get('/edit/{id}', [PostController::class, 'editfrom'])->name('edit_form');
    Route::put('/update/{id}', [PostController::class, 'updatepost'])->name('update');
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');;
