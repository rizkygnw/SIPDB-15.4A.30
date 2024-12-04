<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     return csrf_token();
// });

Route::post('/student', [StudentController::class, 'store']);

