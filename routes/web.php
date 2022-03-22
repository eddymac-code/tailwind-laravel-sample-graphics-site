<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'entries'], function(){
    Route::get('data', [EntryController::class, 'index'])->name('entries');
    Route::get('create', [EntryController::class, 'create'])->name('add-entries');
    Route::post('store', [EntryController::class, 'store'])->name('insert-entries');
    Route::get('{entry}/edit', [EntryController::class, 'edit'])->name('edit-entries');
    Route::post('{entry}/edit', [EntryController::class, 'store']);
    Route::delete('{entry}/delete', [EntryController::class, 'destroy'])->name('delete-entries');
});

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/admin', [LoginController::class, 'store']);

Route::get('admin/register', [RegisterController::class, 'index'])->name('register');
Route::post('admin/register', [RegisterController::class, 'store']);
