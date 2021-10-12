<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Auth::routes([
    'register' => false
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
