<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function(){
    $students = [
        ["name" => "arini", "skill" => 90, "id" => "1"],
        ["name" => "nur", "skill" => 80, "id" => "2"],
    ];

    return view('students.index', ["greeting" => "hello", "students" => $students]);
});

Route::get('/students/{id}', function($id){
    return view('students.show', ["id" => $id]);
});

