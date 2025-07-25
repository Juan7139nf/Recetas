<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Site\OrdenController;
use App\Http\Controllers\Site\SettingsController;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Products\CategoriaAddEdit;
use App\Livewire\Admin\Products\CategoriaBrowser;
use App\Livewire\Admin\Products\CategoriaRead;
use App\Livewire\Admin\Products\RecetasAdd;
use App\Livewire\Admin\Products\RecetasBrowser;
use App\Livewire\Admin\Products\RecetasEdit;
use App\Livewire\Admin\Products\RecetasRead;
use App\Livewire\Admin\Products\RecipePartEdit;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\RegisterStep1;
use App\Livewire\Auth\RegisterStep2;
use App\Livewire\Auth\RegistrationCompleted;
use App\Livewire\Site\Home;
use App\Livewire\Site\Order\Confirm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

/*
Route::get('/', function () {
    return view('welcome');
})->name('home');*/

Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');

Route::prefix('authentication')->name('auth.')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', RegisterStep1::class)->name('register');
    Route::get('/complete-profile', RegisterStep2::class)->middleware('auth')->name('complete-profile');
    Route::get('/registration-completed', RegistrationCompleted::class)->middleware('auth')->name('registration-completed');
    Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/settings/toggle-theme', [SettingsController::class, 'toggleTheme'])->name('settings.toggleTheme');
    Route::post('/settings/toggle-language', [SettingsController::class, 'toggleLanguage'])->name('settings.toggleLanguage');
});


Route::prefix('dashboard')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');

    Route::prefix('product')->name('product.')->group(function () {
        Route::prefix('recipe')->name('recipe.')->group(function () {
            Route::get('/', RecetasBrowser::class)->name('browser');
            Route::get('/read/{id}', RecetasRead::class)->name('read');
            Route::get('/edit/{id}', RecetasEdit::class)->name('edit');
            Route::get('/create', RecetasAdd::class)->name('add');
            Route::get('/part/{id}', RecipePartEdit::class)->name('part');
        });
        Route::prefix('category')->name('category.')->group(function () {
            Route::get('/', CategoriaBrowser::class)->name('browser');
            Route::get('/read', CategoriaRead::class)->name('read');
            Route::get('/create', CategoriaAddEdit::class)->name('add');
            Route::get('/edit/{id}', CategoriaAddEdit::class)->name('edit');
        });
    });
});

Route::post('/orden/agregar/{id}', [OrdenController::class, 'agregar'])
    ->name('orden.agregar')
    ->middleware('auth');

Route::get('/orden/cart', Confirm::class)
    ->name('cart')
    ->middleware('auth');