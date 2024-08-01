<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordMail;
use App\Models\PasswordResetToken;
use Illuminate\Support\Facades\Mail;


class ForgotPasswordController extends Controller
{
    public function forgot_password(){
        return view('forgot-password');
    }


    // public function forgot_password_act(Request $request){
    //     $request->validate([
    //         'email' => 'required|email|exists:users,email'
    //     ]);


    //     $token = Str::random(60);
        
    //     PasswordResetToken::updateOrCreate(
    //         [
    //         'email' => $request->email,

    //         ],
            
    //         [
    //         'email' => $request->email,
    //         'token' => $token,
    //         'created_at' => now(),
    //     ]);

    //     Mail::to($request->email)->send(new ResetPasswordMail($token));

    // return redirect()->back()->with('success', 'Success send email');


    // }
}
