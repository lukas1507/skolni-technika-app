<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('katalog');
})->middleware(['auth'])->name('katalog');

Route::middleware(['auth'])->group(function () {
    Route::get('/detail', function () {
        return view('detail');
    })->name('detail');

    Route::get('/rezervace', function () {
        return view('rezervace');
    })->name('rezervace');
});

Route::middleware(['auth', 'role:spravce'])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
});

require __DIR__.'/auth.php';