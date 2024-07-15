<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');

    }

    public function adminLoginForm(){
        return view('admin.adminlogin');
    }

   
    public function adminlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {

            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

                if(Auth::guard('admin')->user()->role != "admin"){
                    Auth::guard('admin')->logout();
                    return redirect()->route('admin_login')->with('error','You not authorazed for admin login');
                }
                return redirect()->route('admin.index');

            } else {
                return redirect()->route('admin_login')->with('error','Either email or password Incorrect');
            }
        } else {
            return redirect()->route('admin_login')->withInput()->withErrors($validator);
        }
    }
    

    
 
    public function adminlogout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }



}
