<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserGestionController extends Controller
{
    public function index()
    {
        return view('a_user_gestion');
    }
    
}
