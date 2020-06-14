<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    private $genders;
    public function __construct()
    {
        $this->students = config('student.students');
        $this->genders = config('student.genders');
    }

    //index "home page"
    public function index()
    {
        $data = [
            'students' => $this->students,
            'genders' => $this->genders
        ];

        return view('student.index', $data);
    }
    // show "details student
    public function show($slug)
    {
        $student = $this->searchStudent($slug, $this->students);
        if (!$student) {
            abort('404');
        }
        return view('students.show', compact('student'));
    }
    private function searchStudent($slug, $array)
    {
        foreach ($array as $student) {
            if ($student['slug'] == $slug) {
                return $student;
            }
        }
        return false;
    }
}
