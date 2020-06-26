<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Announcement;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('announcement.index')->with('announcements', $announcements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcement.create');
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
            'subject' => 'required',
            'content' => 'required'
        ]);

        $ann = new Announcement;
        $ann->subject = $request->input('subject');
        $ann->content = $request->input('content');
        $ann->user_id = auth()->user()->id;
        $ann->save();
        return redirect('/announcement')->withSuccess('Your announcement has been added successfully!');
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
        $ann = Announcement::find($id);
        return view('announcement.edit')->with('announcement', $ann);
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
        $this->validate($request, [
            'subject' => 'required',
            'content' => 'required'
        ]);

        $ann = Announcement::find($id);
        $ann->subject = $request->input('subject');
        $ann->content = $request->input('content');
        $ann->user_id = auth()->user()->id;
        $ann->save();
        return redirect('/announcement')->withSuccess('Your announcement has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ann = Announcement::find($id);
        $ann->delete();
        return redirect('/announcement')->withSuccess('Your announcement has been deleted successfully!');
    }
}
