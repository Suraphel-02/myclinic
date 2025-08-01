<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;

Route::apiResource('patients', PatientController::class);
Route::apiResource('doctors', DoctorController::class);
Route::apiResource('appointments', AppointmentController::class);

Route::apiResource('treatments', App\Http\Controllers\TreatmentController::class);
Route::apiResource('billing', App\Http\Controllers\BillingController::class);
Route::apiResource('medical-records', App\Http\Controllers\MedicalRecordController::class);