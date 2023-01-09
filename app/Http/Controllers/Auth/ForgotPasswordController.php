<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    public function showLinkRequestForm()
    {

        return view('auth/passwords/email');
    }

    public function sendResetLinkEmail(Request $request)
    {

        $token = PasswordReset::where('email',$request->request->get('email'))->first();

        return view('auth/passwords/reset',$token);
    }
}
