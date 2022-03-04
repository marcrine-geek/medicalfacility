<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\PatientController;

use App\Http\Controllers\DoctorController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/about', [HomeController::class, 'about']);

Route::get('/doctors', [HomeController::class, 'doctors']);

Route::get('/hospitals', [HomeController::class, 'hospitals']);

Route::get('contacts', [HomeController::class, 'contacts']);

Route::get('/patients', [AdminController::class, 'patients']);

Route::get('/updateuser/{id}', [AdminController::class, 'updateuser']);

Route::post('/edituser/{id}', [AdminController::class, 'edituser']);

Route::get('/delete/{id}', [AdminController::class, 'delete']);

Route::get('/myhealth', [PatientController::class, 'myhealth']);

Route::get('/medical_history', [PatientController::class, 'medical_history']);

Route::get('/sensitive_condition', [PatientController::class, 'sensitive_condition']);

Route::get('/book_appointments', [PatientController::class, 'book_appointments']);

Route::get('/ask_doctor', [PatientController::class, 'ask_doctor']);

Route::get('/comments', [PatientController::class, 'comments']);

Route::post('/appointment', [PatientController::class, 'appointment']);

Route::get('/general_health', [DoctorController::class, 'general_health']);

Route::post('/health', [DoctorController::class, 'health']);

Route::get('/treatment', [DoctorController::class, 'treatment']);

Route::post('/patient_treatment', [DoctorController::class, 'patient_treatment']);

Route::get('/sensitive', [DoctorController::class, 'sensitive']);

Route::post('/condition', [DoctorController::class, 'condition']);

Route::get('/appoint', [DoctorController::class, 'appoint']);

Route::get('/approve/{id}', [DoctorController::class, 'approve']);

Route::get('/cancel/{id}', [DoctorController::class, 'cancel']);

//Route::get('/sendmail/{id}', [DoctorController::class, 'sendmail']);
//
//Route::get('/emailview/{id}', [DoctorController::class, 'emailview']);
















