<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('produtos.index');
})->name('produtos');

Route::get('/ofertas', function () {
    return view('produtos.ofertas');
})->name('ofertas');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/perfil', function () {
    return view('perfil.index');
})->name('perfil');
