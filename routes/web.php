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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plan',function(){
    return view('plan');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/changepass', [App\Http\Controllers\AdminController::class, 'changepass'])->name('changepass');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/expert', [App\Http\Controllers\ExpertController::class, 'index'])->name('expert');

});