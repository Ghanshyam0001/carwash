<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordResetLinkController extends Controller
{

    public function create()
    {
        return view('front.layouts.forgot-password');
    }

    public function store(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );
       

 return $status === Password::RESET_LINK_SENT
        ? redirect()->route('email.send')->with('status', __($status))
        : back()->withErrors(['email' => __($status)]);


        // return $status === Password::RESET_LINK_SENT
        //     ? redirect()->intended('reset-password/{token}')->with('status', __($status))
        //     : back()->withErrors(['email' => __($status)]);
    }
 public function emailsend(){
    return view('front.layouts.emailsend');
 }


}
