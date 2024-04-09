<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function viewform()
    {
        $students=Student::all();
        return view('student-reg',compact('students'));
    }
    public function addstudent(Request $request)
    {
        // dd($request->all());
        // print_r($request->all());
        Student::create($request->all());
        return redirect()->route('index')->with('message','Created Successfully');
    }


}
