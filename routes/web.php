<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::redirect('/', '/employees');

// Route untuk menampilkan daftar karyawan
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

// Route untuk menampilkan formulir tambah karyawan
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

// Route untuk menyimpan data karyawan baru
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

// Route untuk menampilkan detail karyawan
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');

// Route untuk menampilkan formulir edit karyawan
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');

// Route untuk menyimpan perubahan data karyawan
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

// Route untuk menghapus karyawan
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');