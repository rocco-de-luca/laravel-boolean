<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function gender(Request $request)
    {
        $students = config('students.students');
        $genders = config('students.genders');
        $gender = $request->input('filter');

        // punto di partenza per ciò che ritorneremo con l'api
        $result = [
            'error' => '',
            'response' => []
        ];
        // controllo se i dati passati sono presenti
        if (in_array($gender, $genders)) {
            if ($gender == 'all') {
                $result['response'] = $students;
            } else {
                foreach ($students as $student) {
                    if ($student['genere'] == $gender) {
                        $result['response'][] = $student;
                    }
                }
            }
        } else {
            $result['error'] = 'filter not allowed';
        }
        // ritorno i dati in formato json
        return response()->json($result);
    }
}
