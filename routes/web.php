<?php

use App\Http\Controllers\Admin\ProfessorsController;
use App\Http\Controllers\Advisor\AdviseesController;
use App\Http\Controllers\CoursesController;
use App\Http\Middleware\IsStudentUser;
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

    Route::group(['prefix' => 'courses'], function () {
        Route::get('/', [\App\Http\Controllers\Advisor\CoursesController::class, 'index'])->name('admin.courses');
    });

    Route::group(['prefix' => 'advisees'], function () {
        Route::get('/', [AdviseesController::class, 'index'])->name('admin.advisees');
    });
});

Route::group(['prefix' => 'student', 'middleware' => IsStudentUser::class], function (){
    Route::get('/student-dashboard', [App\Http\Controllers\StudentController::class, 'index'])->name('student.dashboard');
    Route::group(['prefix' => 'courses'], function (){
        Route::get('/', [CoursesController::class, 'index'])->name('student.courses');
    });
});
Auth::routes();

