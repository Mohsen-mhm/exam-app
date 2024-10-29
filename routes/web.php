<?php

use App\Livewire\Auth\Login;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', Home::class)->name('home');
});
Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class)->name('login');
});
