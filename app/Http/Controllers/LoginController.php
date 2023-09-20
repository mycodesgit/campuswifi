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

    public function postLogin(Request $request){
        $validated = $this->guard()->attempt([
            'stud_id' => $request->stud_id,
            'password' => $request->password,
        ], $request->remember);

        if ($validated) {
            $stud_id = Auth::guard('students')->user()->id;
            $stud = Students::find($stud_id);

            if ($stud->vc_id == null || $stud->vc_id == "no vc") {
                $voucher = Voucher::where('status', 1)->inRandomOrder()->first();

                if ($voucher) {
                    $vcidgen = $voucher->id;

                    $stud->update(['vc_id' => $vcidgen]);
                    $voucher->update(['status' => 0]);
                } else {
                    $vcidgen = "no vc";
                    $stud->update(['vc_id' => $vcidgen]);
                }
            } else {
                $vcgen = "already has a voucher";
            }

            return redirect()->route('dashboard')->with('success', 'Login Successfully');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }

    }
}
