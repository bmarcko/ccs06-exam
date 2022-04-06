<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function begin(){
        return view('begin');
    }

    public function enterGrades(Request $request){
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;

        return view('enter-grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

    protected function computeAverageGrade($midterm, $finals){
        $average = ($midterm + $finals) / 2;
        return round($average, 2);
    }

    public function computeGrades(Request $request){
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;

        $s1_average = $this->computeAverageGrade($request->s1_midterm, $request->s1_finals);
        $s2_average = $this->computeAverageGrade($request->s2_midterm, $request->s2_finals);
        $s3_average = $this->computeAverageGrade($request->s3_midterm, $request->s3_finals);
        $s4_average = $this->computeAverageGrade($request->s4_midterm, $request->s4_finals);
        $s5_average = $this->computeAverageGrade($request->s5_midterm, $request->s5_finals);

        return view('compute-grades', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            //Student 1
            's1_midterm' => $request->s2_midterm,
            's1_finals' => $request->s2_finals,
            's1_average' => $s2_average,
            //Student 2
            's2_midterm' => $request->s3_midterm,
            's2_finals' => $request->s3_finals,
            's2_average' => $s3_average,
            //Student 3
            's3_midterm' => $request->s5_midterm,
            's3_finals' => $request->s4_finals,
            's3_average' => $s4_average,
            //Student 4
            's4_midterm' => $request->s4_midterm,
            's4_finals' => $request->s4_finals,
            's4_average' => $s4_average,
            //Student 5
            's5_midterm' => $request->s5midterm,
            's5_finals' => $request->s5_finals,
            's5_average' => $s5_average,

        ]);
    }
}