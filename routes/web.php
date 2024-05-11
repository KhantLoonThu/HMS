<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/departments', DepartmentController::class);
Route::resource('/doctors', DoctorController::class);
Route::resource('/patients', PatientController::class);
Route::resource('/appointments', AppointmentController::class);
