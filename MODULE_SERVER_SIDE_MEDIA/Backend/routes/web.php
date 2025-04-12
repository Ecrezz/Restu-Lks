<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/create-form', function () {
    return view('create-form');
});

Route::get('/detail-form', function () {
    return view('detail-form');
});

Route::get('/forbidden', function () {
    return view('forbidden');
});

Route::get('/notfound', function () {
    return view('notfound');
});

Route::get('/responses', function () {
    return view('responses');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/detail-games', function () {
    return view('detail-games');
});

Route::get('/discover-games', function () {
    return view('discover-games');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/manage-games-form-update', function () {
    return view('manage-games-form-update');
});

Route::get('/manage-games-form', function () {
    return view('manage-games-form');
});

Route::get('/manage-games', function () {
    return view('manage-games');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/admins', function () {
    return view('admins');
});

Route::get('/users-form', function () {
    return view('users-form');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/gamezip', function () {
    return view('gamezip');
});