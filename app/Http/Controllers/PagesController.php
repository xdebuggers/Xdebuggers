<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\CV;
use App\Skill;
use App\Event;

class PagesController extends Controller
{
    public function getHome() {

        $anns = Announcement::orderBy('created_at', 'DESC')->take(4)->get();
        return view('home')->with(['anns' => $anns]);
    }

    public function getAbout() {
        $cv = CV::all();
        if(count($cv) == 1){
            $cv = $cv[0];
            $skills = $cv->skills;
            $events = $cv->events;
            $data = array(
                'cv' => $cv,
                'skills' => $skills,
                'events' => $events
            );
            return view('about')->with($data);
        } else {
            return redirect('/')->withErrors('No CV has been found!');
        }


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
