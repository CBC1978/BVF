<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminUserGestionController extends Controller
{
    public function index()
    {
        return view('admin.a_user_gestion');
    }
}
