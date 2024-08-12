<?php

Route::view('/', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
