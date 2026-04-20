<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfo;

class StudentController extends Controller
{
    // DISPLAY
    public function students_pagination()
    {
        $students = StudentInfo::whereNull('deleted_at')->get();
        return view('students_module.Students_list', compact('students'));
    }

    // STORE
    public function store_student(Request $request)
    {
        $student = new StudentInfo();
        $student->lname = $request->lname;
        $student->fname = $request->fname;
        $student->mname = $request->mname;
        $student->bday = $request->bday;
        $student->address = $request->address;
        $student->save();

        return redirect()->back()->with('success', 'Student added successfully!');
    }

    // UPDATE ✅ FIXED
    public function update_student(Request $request)
    {
        $student = StudentInfo::find($request->id);

        if (!$student) {
            return redirect()->back()->with('error', 'Student not found!');
        }

        $student->lname = $request->lname;
        $student->fname = $request->fname;
        $student->mname = $request->mname;
        $student->bday = $request->bday;
        $student->address = $request->address;
        $student->save();

        return redirect()->back()->with('success', 'Student updated successfully!');
    }

    // DELETE
    public function delete_students(Request $request)
    {
        $student = StudentInfo::find($request->id);

        if ($student) {
            $student->delete();
        }

        return redirect()->back()->with('success', 'Student deleted successfully!');
    }
}