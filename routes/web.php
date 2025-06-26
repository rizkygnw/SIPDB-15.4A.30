<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\RegistrationController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// user route
Route::middleware(['auth', 'userMiddleware'])->group(function(){
    Route::get('dashboard',[UserController::class,'index'])->name('dashboard');
    Route::resource('/user/registrations', RegistrationController::class);
    Route::get('/user/registration/create', [RegistrationController::class, 'create'])->name('registrations.create');
});

// admin route
Route::middleware(['auth', 'adminMiddleware'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::resource('/admin/students', StudentController::class);
    Route::resource('/admin/documents', DocumentController  ::class);
    Route::resource('/admin/departments', DepartmentController::class);
    Route::resource('/admin/payments', PaymentController::class);
    Route::resource('/admin/logs', LogController::class)->only(['index']);
    Route::delete('/admin/logs/delete-all', [LogController::class, 'destroyAll'])->name('logs.destroy.all');
    Route::get('/admin/export-siswa', [App\Http\Controllers\Admin\ExportController::class, 'export'])->name('siswa.export');
});
