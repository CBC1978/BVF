<?php

namespace App\Http\Controllers;

use App\Mail\User\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function message()
    {
        Mail::to('arduino1024@gmail.com')
            ->send(new VerifyEmail());

        return view('email.confirm');
    }
}
