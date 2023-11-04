<?php

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

// Routes for authentication
Route::get('/', function () {
    return view('welcome');
});  

use App\Http\Controllers\LoginController;
Route::post('/login', [LoginController::class, 'login']);


use App\Http\Controllers\ProfileController;
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
});

use App\Http\Controllers\AppointmentController;

Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
Route::get('/appointments', [AppointmentController::class, 'getAppointments'])->name('appointments');





 
use App\Http\Controllers\DoctorController;
Route::get('/doctors', [DoctorController::class, 'showDoctors']);


// Route for handling logout
Route::get('/logout', function () {
    // Your logout logic here
    return redirect('/');
});
