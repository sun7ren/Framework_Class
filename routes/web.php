<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/create', function(){
    return view('students.create');
});

Route::get('/students/{id}', function($id){
    return view('students.show', ["id" => $id]);
});

