<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferDetailsController extends Controller
{
    public function index()
    {
        return view('offer_details');
    }
}
