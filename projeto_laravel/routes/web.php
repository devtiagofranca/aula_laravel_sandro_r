<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    $usuarios = [
        ['nome' => 'Tiago'],
        ['nome' => 'Sandro'],
    ];
    return view('teste', compact('usuarios'));
});

Route::get('/teste2', function(){
    $carros = [
        ['marca' => 'Kia'],
        ['marca' => 'Ford'],
    ];
    return view('teste2', compact('carros'));
});
