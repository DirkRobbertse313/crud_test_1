<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Employee routes

Route::get('/employee',                   [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/create',            [EmployeeController::class,'create'])->name('employee.create');
Route::post('/employee',                  [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{employee}/show',   [EmployeeController::class, 'show'])->name('employee.show');
Route::get('/employee/{employee}/edit',   [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{employee}',     [EmployeeController::class, 'destroy'])->name('employee.destroy');
