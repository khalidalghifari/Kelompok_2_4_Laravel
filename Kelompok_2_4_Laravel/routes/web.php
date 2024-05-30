<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProflController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DoctorController::class, 'index'])->name('dashboard');
    Route::get('/new-appointment', [AppointmentController::class, 'newAppointment'])->name('newAppointment');
    Route::get('/all-appointment', [AppointmentController::class, 'allAppointment'])->name('allAppointment');
    Route::get('/cancel-appointment', [AppointmentController::class, 'cancelAppointment'])->name('cancelAppointment');
    Route::get('/approve-appointment', [AppointmentController::class, 'aprvAppointment'])->name('aprvAppointment');
    Route::get('/detail-appointment/{id}/{aptnum}', [AppointmentController::class, 'show'])->name('detailAppointment.show');
    Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->name('appointment.update');

    Route::get('/search-appointment', [AppointmentController::class, 'searchPage'])->name("appointment.searchPage");
    Route::get('/search-appointment/result', [AppointmentController::class, 'searchResult'])->name("appointment.searchResult");

    Route::get('/report', [ReportController::class, 'index'])->name("report");
    Route::post('/report', [ReportController::class, 'appointment_bwdates'])->name("appointment.bwdates");

    Route::get('/profil', [ProflController::class, 'index'])->name("profil");
    Route::get('/change-password', [ProflController::class, 'show'])->name('changePassword');
    Route::put('/profil', [ProflController::class, 'update'])->name("profil.update");
});

Route::get('/', [AppointmentController::class, 'index'])->name("appointment.index");
Route::post('/get-doctor', [AppointmentController::class, 'get_doctor'])->name("appointment.getDoctor");
Route::post('/book-appointment', [AppointmentController::class, 'store'])->name("appointment.booking");
Route::get('/check-appointment', [AppointmentController::class, 'check'])->name("appointment.check");
Route::get('/check-appointment/search', [AppointmentController::class, 'searchAppointment'])->name("appointment.search");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
