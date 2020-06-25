<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class PagesController extends Controller
{
    public function getHome() {

        $anns = Announcement::orderBy('created_at', 'DESC')->take(4)->get();
        return view('home')->with(['anns' => $anns]);
    }

    public function getAbout() {
        return view('about');
    }

    public function getContact() {
        $user = auth()->user();
        if($user == null) {
            return redirect('/')->withErrors('You need to be logged in to contact us');
        }
        else {
            $user->birthday = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->birthday)->format('Y-m-d');
            return view('contact')->with('user', $user);
        }
    }

    public function getProjects() {
        return view('projects');
    }
}
