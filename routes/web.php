<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;

Route::get('/', function () {
    return view('pages.managed-services');
});

Route::post('/submit', [submit::class, 'submitForm'])->name('submit-form');
