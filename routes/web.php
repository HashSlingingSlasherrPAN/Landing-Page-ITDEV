<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/person', [PersonController::class, 'index'])->name('person.index');
Route::get('/person/form', [PersonController::class, 'form'])->name('person.form');

Route::post('/person', [PersonController::class, 'store'])->name('person.store');
