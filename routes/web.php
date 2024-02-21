<?php

use App\Http\Controllers\Admin\ProfessorsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdminUser;
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
})->middleware('auth');

Route::group(['prefix' => 'admin', 'middleware' => IsAdminUser::class], function (){
    Route::get('/dashboard', [App\Http\Controllers\AdvisorsController::class, 'index'])->name('admin.dashboard');
    Route::group(['prefix' => 'professors'], function (){
        Route::get('/', [ProfessorsController::class, 'index'])->name('admin.professors');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
