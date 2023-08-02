<?php

namespace App\Http\Controllers;

use App\Mail\User\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AddOfferController extends Controller
{
    public function index()
    {
        return view('add_offer');
    }

    public function message()
    {
        Mail::to('arduino1024@gmail.com')
            ->send(new VerifyEmail());

       var_dump('test');
    }
}
