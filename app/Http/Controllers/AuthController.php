<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;



class AuthController extends Controller
{
    public $datetime;

    public function __construct()
    {
        $this->datetime = now()->format('d-m-Y h:i:s A');
    }

    public function index()
    {
        return view('Admin.login');
    }

    public function login(Request $request)
    { 
    $validator = Validator::make($request->all(),[
        $email = $request->email,
        $pass = $request->password,
    ]);
     if($validator->passes())
     {
       
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->get('remember'))){
            Session::flash('success', 'Login successfully.');
            return redirect()->route('dashboard'); // Redirect to the registration route 
        }
        else{
            return redirect()->route('login')->with('error', 'Email OR Password Does not Match.'); // Redirect to the registration route 
        }
    }
   
    }
   

   
    public function registration()
    {
        return view('Admin.register');
    }

    public function regins(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password|min:5'
        ]);

        $insdata = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'confirm_password' => bcrypt($request->confirm_password),
            'status' => 1 
        ];
         // Check if the email already exists
         $existingEmail = DB::table('admin')->where('email', $request->email)->exists();

         if ($existingEmail) {
             // Flash error message to the session
             Session::flash('error', 'Email address already exists.');
             return redirect()->route('registration'); // Redirect to the registration route
         }
        $ins = DB::table('admin')->insert($insdata);
        if ($ins) {
            // Flash success message to the session
            Session::flash('success', 'Data inserted successfully!');
            return redirect()->route('login'); // Redirect to the dashboard route
        } else {
            // Flash error message to the session
            Session::flash('error', 'Failed to insert data.');
            return redirect()->route('your.notification.route'); // Redirect to the notification route
        }
        // return redirect('dashboard');
    }
}
