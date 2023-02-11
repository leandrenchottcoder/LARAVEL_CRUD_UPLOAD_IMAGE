<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('students', [StudentController::class, 'index'])->name('index');
Route::get('add-student', [StudentController::class, 'create'])->name('add-student');
Route::post('add-student', [StudentController::class, 'store'])->name('add-student-store');
Route::get('edit-student/{id}', [StudentController::class, 'edit'])->name('edit-student');
Route::put('update-student/{id}', [StudentController::class, 'update'])->name('update-student');
Route::delete('delete-student/{id}', [StudentController::class, 'destroy'])->name('destroy-student');
