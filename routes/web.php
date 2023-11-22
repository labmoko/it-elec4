<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyResourceController;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;



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

Route::get('/', function () {
    return view('welcome');
});
Route::get('nav', function () {
    return view('nav');
});
Route::get('new', function () {
    return view('new');
});
Route::get('sale', function () {
    return view('sale');
});
Route::get('clothing', function () {
    return view('clothing');
});
Route::get('donation', function () {
    return view('donation');
});
Route::get('aboutus', function () {
    return view('aboutus');
});
Route::get('explore', function () {
    return view('explore');
});



Route::resource('resources', MyResourceController::class);
Route::resource('clothes', ClothesController::class);

//admin controller
Route::resource('admin', AdminController::class); /** 11/8 controller for admin */
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.profile');

//user controller
Route::resource('user', UserController::class); /** 11/8 controller for user */
Route::get('/user/profile', [App\Http\Controllers\UserController::class, 'index'])->name('user.profile');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

