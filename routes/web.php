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
Route::get('/admin/view/{id}', [App\Http\Controllers\AdminController::class, 'adview'])->name('adview');
Route::get('/admin/changepass', [App\Http\Controllers\AdminController::class, 'changepass'])->name('changepass');
Route::post('admin/changepass', 'App\Http\Controllers\AdminController@changepassword')->name('changepassword');
Route::get('/admin/oldDefects', [App\Http\Controllers\AdminController::class, 'olddef'])->name('olddef');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/user/defect', [App\Http\Controllers\UserController::class, 'defect'])->name('defect');
Route::get('/user/defect/create', [App\Http\Controllers\DefectController::class, 'store'])->name('store');
Route::get('/user/changepass', [App\Http\Controllers\UserController::class, 'changepa'])->name('changepa');
Route::post('user/changepass', 'App\Http\Controllers\UserController@changep')->name('changep');
Route::get('user/olddef', 'App\Http\Controllers\UserController@olddef')->name('olddef');
Route::get('/user/view/{id}', [App\Http\Controllers\UserController::class, 'viewu'])->name('viewu');
Route::get('/expert', [App\Http\Controllers\ExpertController::class, 'index'])->name('expert');
Route::get('/expert/view/{id}', [App\Http\Controllers\ExpertController::class, 'view'])->name('view');
Route::get('/expert/oldDefects', [App\Http\Controllers\ExpertController::class, 'oldDefects'])->name('oldDefects');
Route::get('/expert/changepass', [App\Http\Controllers\ExpertController::class, 'changepass'])->name('changepass');
Route::post('/expert/changepass', 'App\Http\Controllers\ExpertController@changepasswd')->name('changepasswd');
Route::get('/admin/addExpert', [App\Http\Controllers\AdminController::class, 'addExpert'])->name('admin.create');
Route::post('admin/addExpert', 'App\Http\Controllers\AdminController@adregister')->name('adregister');
Route::get('/admin/assign', [App\Http\Controllers\AdminController::class, 'assign'])->name('adminassign');
Route::get('/expert/assign', [App\Http\Controllers\ExpertController::class, 'assign'])->name('expassign');
Route::get('/expert/changestatus', [App\Http\Controllers\ExpertController::class, 'changestatus'])->name('changestatus');
});

