<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAuthController;
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
    return view('login');
});

Route::get('/registration',[UserAuthController::class,'r'])->name('auth.r');;
Route::post('/save',[UserAuthController::class,'save'])->name('auth.save');
Route::post('/check',[UserAuthController::class, 'check'])->name('auth.check');
Route::get('/logout',[UserAuthController::class, 'logout'])->name('auth.logout');
Route::post('/savestudent',[StudentController::class,'savestudent'])->name('save.student');
Route::get('/delete-student/{id}',[StudentController::class, 'deleteStudent']);
Route::get('/edit-student/{id}',[StudentController::class, 'editStudent']);
Route::post('/update-student',[StudentController::class,'updateStudent'])->name('update.student');
Route::get('/search','StudentController@search');



Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/',[UserAuthController::class,'l'])->name('auth.l');;
    Route::get('/studentlist',[StudentController::class,'studentlist'])->name('student.list');
    Route::get('/newstudent',[StudentController::class,'newstudent'])->name('new.student');
    Route::get('/search',[StudentController::class,'search'])->name('search.student');
    Route::get('/dashboard',[UserAuthController::class,'dashboard']);
});