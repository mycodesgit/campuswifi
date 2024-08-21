<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;
use App\Models\Voucher;

class LoginController extends Controller
{
    public function studlogin() {
        return view ('students.login');
    }
    protected function guard() {
        return auth('students');
    }

    public function postLogin(Request $request)
{
    // Attempt to authenticate the student
    $validated = $this->guard()->attempt([
        'stud_id' => $request->stud_id,
        'password' => $request->password,
    ], $request->remember);

    if ($validated) {
        $schlyear = '2024-2025';  // Current school year
        $semester = '1';          // Current semester
        $stud_id = Auth::guard('students')->user()->id;

        // Fetch the specific student record for the given schlyear, semester, and stud_id
        $stud = Students::where('schlyear', $schlyear)
                        ->where('semester', $semester)
                        ->where('stud_id', $stud_id)
                        ->first(); // Use first() to get a single record

        if ($stud) { // Ensure the student record exists
            if ($stud->vc_id === null || $stud->vc_id === "no vc") {
                // Fetch a random voucher with status 1
                $voucher = Voucher::where('status', 1)->inRandomOrder()->first();

                if ($voucher) {
                    $vcidgen = $voucher->id;

                    // Update the student's vc_id with the selected voucher ID
                    $stud->update(['vc_id' => $vcidgen]);

                    // Update the voucher status to 0 (used)
                    $voucher->update(['status' => 0]);
                } else {
                    // No voucher available
                    $vcidgen = "no vc";
                    $stud->update(['vc_id' => $vcidgen]);
                }
            } else {
                // Student already has a voucher
                $vcgen = "already has a voucher";
            }

            return redirect()->route('dashboard')->with('success', 'Login Successfully');
        } else {
            // No record found for the given schlyear and semester
            return redirect()->back()->with('error', 'No student record found for the current school year and semester.');
        }
    } else {
        // Authentication failed
        return redirect()->back()->with('error', 'Invalid Credentials');
    }
}

}
