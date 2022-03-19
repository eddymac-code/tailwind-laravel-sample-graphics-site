<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntryController;
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
    return view('acme.index');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'entries'], function(){
    Route::get('data', [EntryController::class, 'view'])->name('entries');
    Route::get('create', [EntryController::class, 'create'])->name('add-entries');
    Route::post('store', [EntryController::class, 'store']);
});

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/admin', [LoginController::class, 'store']);

Route::get('admin/register', [RegisterController::class, 'index'])->name('register');
Route::post('admin/register', [RegisterController::class, 'store']);
