<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Login Page
    public function admin()
    {
        return view('admin.login.login');
    }

    // Dashboard Home Page

    public function dashboard()
    {
        return view('admin.index');
    }
}
