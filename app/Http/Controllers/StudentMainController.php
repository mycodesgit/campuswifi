<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Students;
use App\Models\Voucher;
use Illuminate\Support\Facades\Auth;

class StudentMainController extends Controller
{
    public function dashboard() {
        if (Auth::guard('students')->check()) {
            $stud_id = Auth::guard('students')->user()->id;
            $student = Students::find($stud_id);

            if ($student) {
                $vc_id = $student->vc_id;

                $voucher = Voucher::find($vc_id);
                return view('students.layout.masterstudent', compact('voucher'));
            }
        }
        else {
            return redirect()->route('studlogin'); 
        }
    }

    public function logout() {
        Auth::guard('students')->logout();
        return redirect()->route('studlogin')->with('success','You have been Successfully Logged Out');
    }
}
