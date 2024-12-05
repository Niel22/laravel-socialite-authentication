<?php

use App\Http\Controllers\AuthSocialiteControlller;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('home')->middleware('auth');

Route::get('register', Register::class)->middleware('guest');
Route::get('login', Login::class)->name('login')->middleware('guest');
Route::get('login/github', [AuthSocialiteControlller::class, 'github'])->name('github')->middleware('guest');
Route::get('auth/github', [AuthSocialiteControlller::class, 'github_login'])->name('login.github')->middleware('guest');