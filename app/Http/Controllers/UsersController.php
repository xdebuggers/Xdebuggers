<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'role' => 'required'

        ]);

        $user = new User;
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->birthday = $request->input('birthday');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));
        if($request->input('role') == 'admin'){
            $user->role_id = 1;
        } else if($request->input('role') == 'member') {
            $user->role_id = 2;
        } else {
            $user->role_id = 3;
        }
        $user->save();
        return redirect('/user')->withSuccess('A new user has been added successfully!');
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
        $user = User::find($id);
        $user->birthday = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->birthday)->format('Y-m-d');
        return view('user.edit')->with('user', $user);
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
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $user = User::find($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->birthday = $request->input('birthday');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));
        if(auth()->user()->getRole() == 'admin'){
            if($request->input('role') == 'admin'){
                $user->role_id = 1;
            } else if($request->input('role') == 'member') {
                $user->role_id = 2;
            } else {
                $user->role_id = 3;
            }
        }
        $user->save();
        if(auth()->user()->getRole() == 'admin'){
            return redirect('/user')->withSuccess('A new user has been updated successfully!');
        } else {
            return redirect('/dashboard')->withSuccess('Your info has been updated successfully!');
        }
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
