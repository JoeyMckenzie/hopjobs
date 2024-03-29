<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobListingBookmarkController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\JobNotificationSubscriberController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/dashboard', [JobListingController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::post('/jobs/{id}/subscribe', JobNotificationSubscriberController::class)
    ->where('id', '[1-9]+')
    ->name('jobs.subscribe');

Route::post('/jobs/bookmark', JobListingBookmarkController::class)
    ->name('jobs.bookmark');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
