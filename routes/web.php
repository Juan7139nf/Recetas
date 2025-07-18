<?php

use App\Livewire\Auth\RegisterStep1;
use App\Livewire\Auth\RegisterStep2;
use App\Livewire\Auth\RegistrationCompleted;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('welcome');
})->name('login');

Route::prefix('authentication')->name('auth.')->group(function () {
    Route::get('/register', RegisterStep1::class)->name('register');
    Route::get('/complete-profile', RegisterStep2::class)->middleware('auth')->name('complete-profile');
    Route::get('/registration-completed', RegistrationCompleted::class)->middleware('auth')->name('registration-completed');
});
