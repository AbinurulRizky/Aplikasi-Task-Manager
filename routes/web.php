<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loginform.login');
});

Route::get('/login', function() {
    return view('loginform.login');
});

route::get('/register', function () {
    return view('loginform.register');
});