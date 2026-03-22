<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('mail', 'mail')->name('mail');  
    Route::view('boton_1', 'boton_1')->name('boton_1');
    Route::view('boton_2', 'boton_2')->name('boton_2');
    Route::view('boton_3', 'boton_3')->name('boton_3');
    Route::view('boton_4', 'boton_4')->name('boton_4');
});

require __DIR__.'/settings.php';
