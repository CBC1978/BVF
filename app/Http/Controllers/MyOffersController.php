<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyOffersController extends Controller
{
    public function index()
    {
        return view('myoffers');
    }
}
