<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "pagesCustomer.index")->name('home');
Route::view("/form", "pagesCustomer.form")->name('form');
Route::view("/example", "pages.example")->name('example-page');
