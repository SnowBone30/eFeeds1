<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/faq', function () {
    return view('faq');
});
 Route::get('/aboutUs', function () {
        return view('aboutUs');
    });

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/inventory', function () {
    return view('inventory');
});
Route::get('/reports', function () {
    return view('reports');
});