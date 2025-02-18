<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

// use App\Models\EnrollmentDB\KioskUser;
// use App\Models\EnrollmentDB\StudEnrolmnentHistory;
// use App\Models\EnrollmentDB\Student;

class LoginController extends Controller
{
    public function studlogin() {
        return view ('students.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'studid' => 'required',
            'password' => 'required',
        ]);

        $validatedStudent = auth()->guard('kioskstudent')->attempt([
            'studid' => $request->studid,
            'password' => $request->password,
        ]);

        if ($validatedStudent) {
            return redirect()->route('dashboard')->with('success', 'You have successfully logged in.');
        } 
        else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }
}
