<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenido/{name}/{lastname?}', function (string $name, $lastname='') {
    return 'Hola ' . $name . ' ' . $lastname;
})->whereAlpha('name')->whereAlpha('lastname');

Route::get('/greeting/{name}/{lastname?}', function (string $name, $lastname='Doe') {
    return view('greeting', ['nombre' => $name], ['apellido' => $lastname]);
})->whereAlpha('name')->whereAlpha('lastname');

Route::get('/operations/{n1}/{n2}', function ($n1, $n2) {
    return 'Suma: ' . ($n1 + $n2) . '<br>' . 'Resta: ' . ($n1 - $n2) . '<br>' . 'Multiplicación: ' . ($n1 * $n2) . '<br>' . 'División: ' . ($n1 / $n2);
})->whereNumber('n1')->whereNumber('n2');