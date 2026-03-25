<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'titulo' => 'Dashboard',
            'colorClase' => '',
            'mensajeConsola' => '',
        ]);
    })->name('dashboard');
    Route::view('mail', 'mail')->name('mail');  
    Route::view('correo_1', 'correo_1')->name('correo_1');
    Route::view('correo_2', 'correo_2')->name('correo_2');
    Route::view('correo_3', 'correo_3')->name('correo_3');
    Route::view('correo_4', 'correo_4')->name('correo_4');
    Route::view('color_mensaje_1', 'color_mensaje_1')->name('color_mensaje_1');
    Route::get('/dashboard/color1', function () {
        return view('dashboard', [
            'titulo' => 'Color_1',
            'colorClase' => 'bg-red-200 dark:bg-red-900',
            'mensajeConsola' => 'Hello from sidebar!-Cambio de color 1',
        ]);
    })->name('dashboard.color1');
    Route::get('/dashboard/color2', function () {
        return view('dashboard', [
            'titulo' => 'Color_2',
            'colorClase' => 'bg-blue-200 dark:bg-blue-900',
            'mensajeConsola' => 'Hello from sidebar!-Cambio de color 2',
        ]);
    })->name('dashboard.color2');
    Route::get('/dashboard/color3', function () {
        return view('dashboard', [
            'titulo' => 'Color_3',
            'colorClase' => 'bg-green-200 dark:bg-green-900',
            'mensajeConsola' => 'Hello from sidebar!-Cambio de color 3',
        ]);
    })->name('dashboard.color3');
    Route::get('/dashboard/color4', function () {
        return view('dashboard', [
            'titulo' => 'Color_4',
            'colorClase' => 'bg-yellow-200 dark:bg-yellow-900',
            'mensajeConsola' => 'Hello from sidebar!-Cambio de color 4',
        ]);
    })->name('dashboard.color4');



});

require __DIR__.'/settings.php';
