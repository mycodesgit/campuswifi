<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

use App\Models\EnrollmentDB\KioskUser;
use App\Models\EnrollmentDB\StudEnrolmnentHistory;
use App\Models\EnrollmentDB\Student;

use App\Models\CampuswifiDB\VoucherStud;
use App\Models\CampuswifiDB\Voucher;

class StudentMainController extends Controller
{
    public function dashboard() 
    {
        if (!Auth::guard('kioskstudent')->check()) {
            return redirect()->route('studlogin')->with('error', 'Please log in first.');
        }
    
        $user = Auth::guard('kioskstudent')->user();
    
        if (!$user || !$user->studid) {
            return redirect()->route('studlogin')->with('error', 'Invalid user session.');
        }
    
        $studvouch = VoucherStud::join('voucher', 'studvoucherreg.vc_id', '=', 'voucher.id')
                    ->where('stud_id', $user->studid)
                    ->first();
    
        return view('students.layout.masterstudent', compact('studvouch'));
    }
    

    public function generateVoucher(Request $request)
    {
        $user = Auth::guard('kioskstudent')->user();

        $voucher = Voucher::where('status', 1)->first();

        if (!$voucher) {
            return response()->json(['error' => 'No available vouchers'], 404);
        }

        $voucher->update(['status' => 0]);

        VoucherStud::create([
            'stud_id' => Auth::guard('kioskstudent')->user()->student->stud_id,
            'fullname' => Auth::guard('kioskstudent')->user()->student->fname . ', ' . Auth::guard('kioskstudent')->user()->student->lname,
            'vc_id' => $voucher->id,
            'role' => $user->role,
            'schlyear' => '2024-2025', // Adjust dynamically if needed
            'semester' => '2' // Adjust dynamically if needed
        ]);

        return response()->json(['voucher_code' => $voucher->voucher_code], 200);
    }

    public function logout() {
        Auth::guard('kioskstudent')->logout();
        return redirect()->route('studlogin')->with('success','You have been Successfully Logged Out');
    }
}
