<?php

use Illuminate\Support\Facades\Route;

Route::match(['get','post'], '/match' , function(){
    return 'Match';
});

Route::any('/any', function (){
    return 'Any';
});

Route::post('/register', function (){
    return 'Registro de Usuário';
});

Route::get('/empresa', function (){
    return '<h1 style = "color: red; ">Sobre a empresa</h1>';
});

Route::get('/contato', function (){
    return view('contact');
});

Route::get('/', function () {
    return view('welcome');
});
