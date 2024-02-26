<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('employee')->group(function () {
    Route::get('department', [DepartmentController::class, 'index']);
    Route::get('department/create', [DepartmentController::class, 'create']);
    Route::post('department', [DepartmentController::class, 'store']);
    Route::get('department/delete/{id}', [DepartmentController::class, 'destroy']);
    Route::get('department/edit/{id}', [DepartmentController::class, 'edit']);
    Route::put('department/edit/{id}', [DepartmentController::class, 'update']);


    Route::get('employee', [EmployeeController::class, 'index']);
    Route::get('employee/create', [EmployeeController::class, 'create']);
    Route::post('employee', [EmployeeController::class, 'store']);
    Route::get('employee/{id}', [EmployeeController::class, 'edit']);
    Route::put('employee/{id}', [EmployeeController::class, 'update']);
    Route::get('employee/delete/{id}', [EmployeeController::class, 'destroy']);
});
