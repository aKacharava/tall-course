<?php

use App\Http\Controllers\SubscriberController;

Route::view('/', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('subscribers', [SubscriberController::class, 'all'])
    ->name('subscribers.all');
