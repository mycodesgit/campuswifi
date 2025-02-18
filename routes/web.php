<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentMainController;


use App\Http\Controllers\LoginAdminAuthController;
use App\Http\Controllers\AdminMasterController;
use App\Http\Controllers\StudentListController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>['guest']],function(){
    Route::get('/', function () {
        return view('students.login');
    });

    Route::get('/login',[LoginController::class,'studlogin'])->name('studlogin');
    Route::post('/login',[LoginController::class,'postLogin'])->name('postLogin');

    Route::get('/register',[RegisterController::class,'register'])->name('register');
    Route::post('/check-student',[RegisterController::class,'checkStudent'])->name('checkStudent');
    Route::post('/register',[RegisterController::class,'studentCreate'])->name('studentCreate');
});

Route::group(['middleware'=>['login_auth']],function(){
    Route::get('/dashboard',[StudentMainController::class,'dashboard'])->name('dashboard');
    Route::post('/dashboard',[StudentMainController::class,'dashboard'])->name('dashboard');

    Route::post('/generate',[StudentMainController::class,'generateVoucher'])->name('generateVoucher');

    //Logout
    Route::get('/logout',[StudentMainController::class,'logout'])->name('logout');
});


