<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDataController;

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
