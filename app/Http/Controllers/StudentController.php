<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('index', [
            'students' => $students
        ]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $student = new Student();

        $student->last_name = $request->last_name;
        $student->first_name = $request->first_name;
        $student->class = $request->class;
        $student->dob = $request->dob;
        $student->gender = $request->gender;
        
        $student->save();

        return redirect()->route("index");
    }

    public function edit($id) {
        $student = Student::findOrFail($id);
        return view('edit', [
            'student' => $student
        ]);
    }

    public function update($id) {
        $student = Student::findOrFail($id);

        $student->last_name = request('last_name');
        $student->first_name = request('first_name');
        $student->class = request('class');
        $student->dob = request('dob');
        $student->gender = request('gender');
        
        $student->save();

        return redirect()->route("index");
    }

    public function destroy($id) {
        Student::destroy($id);
        return redirect()->route("index");
    }
}
