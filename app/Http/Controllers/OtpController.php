<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function index()
    {
        return view('otp');
    }
    // public function showOtpForm()
    // {
    //     return view('otp');
    // }
}
