<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/admin/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('admin.dashboard');

Route::view('/admin/{any?}', 'admin.dashboard')
    ->where('any', '.*')
    ->middleware(['auth', 'verified']);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
