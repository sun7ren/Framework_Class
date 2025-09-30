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

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student created successfully!');
    }

    public function destroy($id){

    }
}
