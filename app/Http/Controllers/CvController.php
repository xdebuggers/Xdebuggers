<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CV;
use App\Skill;
use App\Event;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cvs = CV::all();
        if(count($cvs) > 0){
            return redirect()->route('about');
        } else {
            return view('cv.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lead' => 'required',
            'description' => 'required',
            'skill.*' => 'required',
            'percent.*' => 'required',
            'event.*' => 'required',
        ]);

        $cv = new CV;
        $cv->lead = $request->input('lead');
        $cv->description = $request->input('description');
        $cv->save();
        $cv = CV::all();
        $cid = $cv[0]->id;
        $skills = array();
        for ($i=0; $i < count($request->skill); $i++) {
            $sk = new Skill;
            $sk->name = $request->skill[$i];
            $sk->percent = $request->percent[$i];
            $sk->c_v_s_id = $cid;
            $id = $sk->save();
            $sk->id = $id;
            array_push($skills, $sk);

        }
        $events = array();
        foreach ($request->event as $event) {
            $e = new Event;
            $e->description = $event;
            $e->c_v_s_id = $cid;
            $id = $e->save();
            $e->id = $id;
            array_push($events, $e);
        }
        return redirect()->route('about');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cv = CV::all();
        $cv = $cv[0];
        $skills = $cv->skills;
        $events = $cv->events;
        $data = array(
            'cv' => $cv,
            'skills' => $skills,
            'events' => $events
        );
        return view('cv.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Skill::truncate();
        Event::truncate();
        $cv = CV::find($id);
        $cv->lead = $request->input('lead');
        $cv->description = $request->input('description');
        $cv->save();
        $cid = CV::find($cv);
        $cid = $cid[0]->id;
        $skills = array();
        for ($i=0; $i < count($request->skill); $i++) {
            $sk = new Skill;
            $sk->name = $request->skill[$i];
            $sk->percent = $request->percent[$i];
            $sk->c_v_s_id = $cid;
            $id = $sk->save();
            $sk->id = $id;
            array_push($skills, $sk);

        }
        $events = array();
        foreach ($request->event as $event) {
            $e = new Event;
            $e->description = $event;
            $e->c_v_s_id = $cid;
            $id = $e->save();
            $e->id = $id;
            array_push($events, $e);
        }
        return redirect()->route('about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
