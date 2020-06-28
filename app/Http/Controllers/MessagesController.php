<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Message;
use App\User;

class MessagesController extends Controller
{
    public function submit(Request $request) {
        $user_id = auth()->user()->id;
        $message = new Message;
        $message->message = $request->input('message');
        $message->subject = $request->input('subject');
        $message->user_id = $user_id;
        $message->save();
        $subject = $request->input('subject');
        $to_mail = auth()->user()->email;
        $data = array(
            'name' => auth()->user()->firstname.' '.auth()->user()->lastname,
            'body' => $request->input('message')
        );
        Mail::send('mail', $data, function($message) use ($to_mail, $subject) {
            $message->to($to_mail)
            ->subject($subject);
        });

        return redirect('/')->withSuccess('Your message has been sent successfully!');
    }

    public function getMessages() {
        // $messages = Message::all();
        $users = User::all();
        $data = [
            'users' => $users,
            'selected_user' => null
        ];
        return view('messages')->with($data);
    }

    public function getUserMessages($id) {
        // $messages = Message::all();
        $users = User::all();
        $user = User::find($id);
        $messages = $user->messages;
        $data = [
            'users' => $users,
            'selected_user' => $user,
            'messages' => $messages
        ];
        return view('messages')->with($data);
    }
}
