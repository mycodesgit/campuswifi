<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Enrolled;
use App\Models\Students;

class RegisterController extends Controller
{
    public function register() {
        return view ('students.register');
    }

    public function checkStudent(Request $request) {
        $studID = $request->input('studID');
        $studentData = Enrolled::where('stud_id', $studID)->first();

        if ($studentData) {
            return response()->json(['message' => 'Student is Enrolled', 'data' => $studentData], 200);
        } else {
            return response()->json(['message' => 'Student data not found', 'data' => $studentData],  404);
        }
    }

    public function studentCreate(Request $request) {
        if ($request->isMethod('post')) {
            $request->validate([
                'stud_id' => 'required|string|max:255',
            ]);

            $studID = $request->input('stud_id');
            $existingID = Students::where('stud_id', $studID)->first();

            if ($existingID) {
                return redirect()->route('register')->with('error', 'Student ID No. already exists!');
            }

            try {
                Students::create([
                    'stud_id' => $request->input('stud_id'),
                    'fullname' => $request->input('fullname'),
                    'password' => Hash::make($request->input('password')),
                    'studlist_id' => $request->input('studlist_id'),
                ]);

                return redirect()->route('register')->with('success', 'Student ID register successfully!');
            } catch (\Exception $e) {
                return redirect()->route()->with('error', 'Failed to register!');
            }
        }
    }



}
