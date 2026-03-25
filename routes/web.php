<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('mail', 'mail')->name('mail');  
    Route::view('correo_1', 'correo_1')->name('correo_1');
    Route::view('correo_2', 'correo_2')->name('correo_2');
    Route::view('correo_3', 'correo_3')->name('correo_3');
    Route::view('correo_4', 'correo_4')->name('correo_4');
});

require __DIR__.'/settings.php';
