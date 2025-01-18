<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'home_view'])->name('views.guest.home');
Route::get('/get-strated', [GuestController::class, 'trial_view'])->name('views.guest.trial');
// Route::get('/success', [GuestController::class, 'success_view'])->name('views.guest.success');

Route::post('/send-mail', [GuestController::class, 'mail_action'])->name('actions.guest.send');
