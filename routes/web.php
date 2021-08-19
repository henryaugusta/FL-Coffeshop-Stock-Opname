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

Route::view('/template/home','template');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin']);
Route::get('/staff', [App\Http\Controllers\HomeController::class, 'index']);

Route::post('/user/store', [App\Http\Controllers\StaffController::class, 'store']);
Route::post('/user/update', [App\Http\Controllers\StaffController::class, 'update']);
Route::get('/user/{id}/delete', [App\Http\Controllers\StaffController::class, 'destroy']);



Route::get('/material/create', [App\Http\Controllers\MaterialController::class, 'viewCreate']);
Route::post('/material/update', [App\Http\Controllers\MaterialController::class, 'update']);
Route::get('/material/{id}/delete', [App\Http\Controllers\MaterialController::class, 'destroy']);

Route::post('/material/store', 'MaterialController@store');
Route::get('/material/{id}/edit', 'MaterialController@edit');
Route::get('/material/{id}/delete', 'MaterialController@destroy');
Route::get('/material/manage', 'MaterialController@viewManage');



Route::get('/admin/user/create', [App\Http\Controllers\StaffController::class, 'viewAdminCreate']);
Route::get('/admin/user/manage', [App\Http\Controllers\StaffController::class, 'viewAdminManage']);
Route::get('/admin/user/{id}/edit', [App\Http\Controllers\StaffController::class, 'viewAdminEdit']);


