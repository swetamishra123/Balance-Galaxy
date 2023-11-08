<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CgpaController extends Controller
{
    public function index()
    {
        return view('cgpa.index');
    }

    public function calculate(Request $request)
    {
        $validatedData = $request->validate([
            'subject_1' => 'required|numeric',
            'subject_2' => 'required|numeric',
            'subject_3' => 'required|numeric',
            'subject_4' => 'required|numeric',
            'subject_5' => 'required|numeric',
            'subject_6' => 'required|numeric',
            'subject_7' => 'required|numeric',
        ]);

        $totalSubjects = 0;
        $totalGradePoints = 0;

        foreach ($validatedData as $subject => $grade) {
            $totalSubjects++;
            $totalGradePoints += $grade;
        }

        $cgpa = $totalGradePoints / $totalSubjects;

        return view('cgpa.result', compact('cgpa'));
    }
}
