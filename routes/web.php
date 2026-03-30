<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'greetings' => 'Hello',
    'person' => request('person', 'Supratik'),
]);

Route::view('/about','about');

Route::view('/contact', 'contact');