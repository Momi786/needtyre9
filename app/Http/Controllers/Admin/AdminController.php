<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //Login Page
    public function login(Request $request)
    {
        If($request->isMethod('post')){
            $data = $request->all();

            // Validation in input fields
            $validate = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required'
            ]);

            // Auth Admin Condition
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect('admin/dashboard');
            }
            else{
                Session::flash('error_message','Invalid Username Or Password');
                return redirect()->back();
            }

        }
        return view('admin.login.login');
    }

    // logout Function
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    // Dashboard Home Page

    public function dashboard()
    {
        return view('admin.index');
    }
}
