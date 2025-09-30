<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Classroom;

class StudentController extends Controller
{
    public function index() {
        $students = Student::with('classroom')->orderBy('created_at', 'desc')->paginate(10);

        return view('students.index', ["students" => $students]);
    }

    public function show($id) {
        $student = Student::with('classroom')->findOrFail($id);

        return view('students.show', ["student" => $student]);
    }

    public function create() {
        $classrooms = Classroom::all();

        return view('students.create', ['classrooms' => $classrooms]);
    }

    public function store(){

    }

    public function destroy($id){

    }
}
