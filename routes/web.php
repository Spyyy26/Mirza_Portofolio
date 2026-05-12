<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::post('/contact/store',
    [ContactController::class, 'store'])
    ->name('contact.store');

Route::get('/messages',
    [ContactController::class, 'index']);