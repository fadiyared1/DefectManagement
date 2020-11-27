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
Route::get('/user/defect', [App\Http\Controllers\UserController::class, 'defect'])->name('defect');
Route::get('/expert', [App\Http\Controllers\ExpertController::class, 'index'])->name('expert');
Route::get('/expert/view', [App\Http\Controllers\ExpertController::class, 'view'])->name('view');
Route::get('/expert/oldDefects', [App\Http\Controllers\ExpertController::class, 'oldDefects'])->name('oldDefects');
Route::get('/expert/changepass', [App\Http\Controllers\ExpertController::class, 'changepass'])->name('changepass');
Route::get('/user/defect/store',[App\Http\Controllers\DefectController::class, 'store'])->name('store');
Route::get('/admin/addExpert', [App\Http\Controllers\AdminController::class, 'addExpert'])->name('addExpert');
Route::post('admin/addExpert', 'AdminController@create')->name('admin.create');
});

