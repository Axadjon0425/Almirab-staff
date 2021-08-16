<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AlmirabController;
use App\Http\Controllers\AlmirabStaffController;
use App\Http\Controllers\AdminController;

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
Route::get('/', [AlmirabController::class, 'index'])->name('index');

 Auth::routes();

/*################################ Home ################################*/

Route::get('/home', [AlmirabController::class, 'index'])->name('home.index');

Route::get('/index/{id}', [AlmirabStaffController::class, 'index'])->name('Almirab.index');

Route::resource('AlmirabStaff', AlmirabStaffController::class);

/*################################ Home ################################*/


/*################################ Admin ################################*/

Route::get('admin/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('admin/password_update', [AdminController::class, 'password_update'])->name('admin.password_update');

/*################################ Admin ################################*/
