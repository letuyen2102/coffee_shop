<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
//user
Route::get('/', function () {
    return view('app');
})->name("home");

Route::get('/login', function () {
    return view('user.login');
})->name('user.login');

Route::get('/menu', function () {
    return view('user.menu');
})->name('user.menu');

Route::get('/cart', function(){
    return view('user.cart');
})->name('user.cart');

//admin
Route::get('/admin',function(){
    return view('admin.admin_login');
})->name('admin.admin_login');

Route::get('/dashboard',function(){
    return view('admin.admin');
})->name('admin.admin');