<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::view('/', 'welcome')->name('home');

Route::Resource('category', CategoryController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
