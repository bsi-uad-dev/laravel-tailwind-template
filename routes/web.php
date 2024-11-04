<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "pages-Guest.index")->name('guest');

Route::view("/home", "pages-Customer.index")->name('home');
Route::view("/form", "pages-Customer.form")->name('form');

Route::view("/example", "pages.example")->name('example-page');
Route::view("/test", "pages.test")->name('test-page');

Route::view("/login", "auth.login")->name('login-page');
Route::view("/register", "auth.register")->name('register-page');
