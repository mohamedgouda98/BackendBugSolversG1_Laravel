<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {

        $student = Student::first();

        $student->update([
            'email' => 'update@gmail.com',
            'name' => 'gouda'
        ]);

        dd($student);

        return view('students.student', compact('students'));
    }
}
