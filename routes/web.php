<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//with authentication
// Route::get('AdminPage', function () {
//     return Inertia::render('AdminPage');
// })->middleware(['auth', 'verified'])->name('adminPage');


Route::get('AdminPage', function () {
    return Inertia::render('AdminPage');
})->name('adminPage');


require __DIR__.'/settings.php';
