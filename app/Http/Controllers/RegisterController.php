<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Models\Students;

class RegisterController extends Controller
{
    public function register() {
        return view ('register');
    }
    public function checkStudent(Request $request)
{
    $studID = $request->input('studID');
    $studentData = Students::where('stud_id', $studID)->first();

    if ($studentData) {
        return response()->json(['message' => 'Student is Enrolled', 'data' => $studentData], 200);
    } else {
        return response()->json(['message' => 'Student data not found', 'data' => $studentData],  404);
    }
}



}
