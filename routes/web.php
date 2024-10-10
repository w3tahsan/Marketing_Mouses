<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/project', [FrontendController::class, 'project'])->name('project');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/service/details', [FrontendController::class, 'service_details'])->name('service.details');

//Home
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__ . '/auth.php';

//Users
Route::get('/edit/profile', [UserController::class, 'edit_profile'])->name('edit.profile');
Route::post('/user/update', [UserController::class, 'user_update'])->name('user.update');
Route::post('/pass/update', [UserController::class, 'password_update'])->name('password.update');
Route::post('/user/photo/update', [UserController::class, 'user_photo_update'])->name('user.photo.update');
Route::get('/user/logout', [UserController::class, 'user_logout'])->name('user.logout');


//Banner
Route::resource('banner', BannerController::class);
