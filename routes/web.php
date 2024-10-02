<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});k

Route::get('/tickets', function () {
    $tickets = [
        ["theme" => "Сломался принтер", "email" => "lexa@mail.loc","date" => "2024-09-15"],
        ["theme" => "Не включается компьютер", "email" => "babanura@mail.loc","date" => "2024-09-16"],
        ["theme" => "Забыл пароль", "email" => "borkwork@mail.loc", "date" => "2024-09-17"],
    ];
    return view('tickets', ['tickets'=>$tickets]);
});