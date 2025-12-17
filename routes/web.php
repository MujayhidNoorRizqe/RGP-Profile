<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'adversting.pages.home')->name('home');
Route::view('/about', 'adversting.pages.about')->name('about');
Route::view('/services', 'adversting.pages.services')->name('services');
Route::view('/contact', 'adversting.pages.contact')->name('contact');

Route::prefix('admin')->group(function () {

    Route::view('/dashboard', 'adversting.admin.pages.dashboard')
        ->name('admin.dashboard');

    // Konten Website
    Route::view('/content/home', 'adversting.admin.pages.content.home')
        ->name('admin.content.home');

    Route::view('/content/about', 'adversting.admin.pages.content.about')
        ->name('admin.content.about');

    Route::view('/content/services', 'adversting.admin.pages.content.services')
        ->name('admin.content.services');

    Route::view('/content/contact', 'adversting.admin.pages.content.contact')
        ->name('admin.content.contact');

    // Settings
    Route::view('/settings', 'adversting.admin.pages.settings')
        ->name('admin.settings');
});

