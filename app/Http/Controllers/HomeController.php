<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function logout(){
        Auth::guard('admin')->logout();   
        return redirect()->route('login'); 
    }
    public function dashboard(){
        return view('Admin.dashboard');
    }
    public function forgetpass()
    {
        return view('Admin.forgetpassword');
    }
    public function recoverpass()
    {
        return view('Admin.recoverpassword');
    }

    public function userregistration(){
        return view('Admin.registration');
    }
}
 
