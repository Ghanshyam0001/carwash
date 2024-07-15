<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;



use Illuminate\Support\Facades\Validator;
use Mockery\Generator\StringManipulation\Pass\Pass;

class HomeController extends Controller
{
    public function index()
    {
        $userName = session('userName');
        return view('front.layouts.index', compact('userName'));
    }

    public function about()
    {
        return view('front.layouts.about');
    }

    public function waching()
    {
        return view('front.layouts.waching');
    }
    public function contact()
    {
        return view('front.layouts.contact');
    }

    public function washorder()
    {
        return view('front.layouts.washorder');
    }

    public function washhistory()
    {
        return view('front.layouts.washinghistory');
    }


    public function showRegister()
    {
        return view('front.layouts.registration');
    }
    public function showLogin()
    {
        return view('front.layouts.loginform');
    }


    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|confirmed|min:8',
            'number' => 'required|digits_between:10,15'
        ]);
        
    
        if ($validator->passes()) {
    
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->number = $request->number;
       $user->role = 'user';
       $user->save();
    
       return redirect()->route('login')->with('success','You have registed Successfully');
    
    
          
            
        } else {
            return redirect()->route('register')->withInput()->withErrors($validator);
        }
    } public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('home.index');

            } else {
                return redirect()->route('login')->with('error','Either email or password Incorrect');
            }
        } else {
            return redirect()->route('login')->withInput()->withErrors($validator);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
     }

    public function indexmail()
    {

        $mailData = [
            'title' => 'Mail from Cleanwash',
            'body' => 'Mail is for testing',
        ];
        Mail::to('ghanshyampatel290520@gmail.com')->send(new DemoMail($mailData));

        dd('email success');
    }
}
