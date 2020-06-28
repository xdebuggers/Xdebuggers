<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

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

    use SendsPasswordResetEmails;
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);
        $email = $this->credentials($request)['email'];
        $user = User::where('email', $email)->get()->first();
        if(!$user) {
            return view('auth.passwords.email');
        } else {
            $newPassword = Str::random(8);
            $user->password = Hash::make($newPassword);

            $subject = 'Password Reset';
            $to_mail = $user->email;
            $data = array(
                'name' => $user->firstname.' '.$user->lastname,
                'body' => 'Your new password is '.$newPassword
            );
            Mail::send('mail', $data, function($message) use ($to_mail, $subject) {
                $message->to($to_mail)
                ->subject($subject);
            });
            $user->save();
            return redirect('/')->withSuccess('Your password has benn changed successfully!');


        }

    }
}
