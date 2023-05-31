<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/inventario', function () {
    return view('inventario');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/500', function () {
    return view('500');
});

Route::get('/informes', function () {
    return view('informes');
});

Route::get('/factura', function () {
    return view('factura');
});

Route::get('/carrito', function () {
    return view('carrito');
});