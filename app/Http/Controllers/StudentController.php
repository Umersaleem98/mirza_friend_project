<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'age' => 'required|integer',
            'city' => 'required|string|max:255',
            'province_state' => 'required|string|max:255',
            'employment_status' => 'required|string|max:255',
            'degree_level' => 'required|string|max:255',
        ]);

        Student::create($validatedData);

        return redirect()->back()->with('success', 'Student added successfully');
    }

    public function edit($id)
    {
        $students = Student::find($id);
        return view('admin.students.edit', compact('students'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'age' => 'required|integer',
            'city' => 'required|string|max:255',
            'province_state' => 'required|string|max:255',
            'employment_status' => 'required|string|max:255',
            'degree_level' => 'required|string|max:255',
        ]);

        // Find the student by ID
        $student = Student::find($id);

        // Check if student exists
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }

        // Update the student record
        $student->update($validatedData);

        return redirect()->back()->with('success', 'Student updated successfully');
    }


    public function destroy($id)
    {
        // Find the student by ID
        $student = Student::find($id);

        // Check if student exists
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }

        // Delete the student
        $student->delete();

        return redirect()->back()->with('success', 'Student deleted successfully');
    }


}
