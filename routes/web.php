<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "index")->name('home');
Route::view("/example", "pages.example")->name('example-page');
