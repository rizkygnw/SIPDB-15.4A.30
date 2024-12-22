<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserDataController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/userdata/foto/{id}', [UserDataController::class, 'foto'])->name('userdata.foto');
    Route::resource('userdata', UserDataController::class)->parameters([
        'userdata' => 'userData',
    ]);
    Route::get('/',function(){ return view('layout');});
    Route::resource('student', StudentController::class);
    Route::resource('registrations', RegistrationController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('logs', LogController::class);
    Route::resource('documents', DocumentController::class);
    Route::resource('departments', DepartmentController::class);
});

// // Rute untuk siswa
// Route::middleware(['auth', 'role:siswa'])->group(function () {
//     Route::get('/siswa/dashboard', [SiswaController::class, 'index'])->name('siswa.dashboard');
// });

// // Rute untuk admin
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// });

require __DIR__.'/auth.php';
