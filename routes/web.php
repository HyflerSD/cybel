<?php

use App\Http\Controllers\Advisor\AdviseesController;
use App\Http\Controllers\Advisor\MapModelController;
use App\Http\Controllers\Advisor\ProfessorsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\IsAdminUser;
use App\Http\Middleware\IsStudentUser;
use App\Http\Middleware\UserRedirect;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function (){})->middleware('user.type');

Route::group(['prefix' => 'admin', 'middleware' => IsAdminUser::class], function (){
    Route::get('/dashboard', [App\Http\Controllers\AdvisorsController::class, 'index'])->name('admin.dashboard');
    Route::group(['prefix' => 'professors'], function (){
        Route::get('/', [ProfessorsController::class, 'index'])->name('admin.professors');
    });

    Route::group(['prefix' => 'courses'], function () {
        Route::get('/', [CoursesController::class, 'index'])->name('admin.courses');
    });

    Route::group(['prefix' => 'advisees'], function () {
        Route::get('/', [AdviseesController::class, 'index'])->name('admin.advisees');
    });

    Route::group(['prefix' => 'models'], function () {
        Route::get('/', [MapModelController::class, 'index'])->name('admin.models');
        Route::get('/create-model', [MapModelController::class, 'createModel'])->name('admin.create-model');
        Route::get('/advisee-maps', [MapModelController::class, 'adviseeMaps'])->name('admin.advisee-maps');
        Route::get('/create-student-map', [MapModelController::class, 'createStudentMap'])->name('admin.create-student-map-form');
        Route::post('/create-student-map', [MapModelController::class, 'generateMap'])->name('admin.handle-create-student-map');
        Route::post('/approve-student-map', [MapModelController::class, 'approveStudentMap'])->name('admin.approve-student-map');
//        Route::post('post-model', [MapModelController::class, 'print'])->name('admin.create-model');
//        Route::post('', [MapModelController::class, 'print'])->name('admin.create-model');
    });
});

Route::group(['prefix' => 'student', 'middleware' => IsStudentUser::class], function (){
    Route::get('/dashboard', [App\Http\Controllers\StudentController::class, 'index'])->name('student.dashboard');
    Route::group(['prefix' => 'courses'], function (){
        Route::get('/', [CoursesController::class, 'index'])->name('student.courses');
    });
    Route::group(['prefix' => 'profile'], function (){
        Route::get('/', [StudentController::class, 'profile'])->name('student.profile');
    });
});
Auth::routes();

