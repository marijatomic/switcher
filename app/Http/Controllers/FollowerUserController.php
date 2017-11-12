<?php

namespace App\Http\Controllers;

use App\FollowerUser;
use App\User;
use Illuminate\Http\Request;

class FollowerUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $followers = FollowerUser::all();

        return view('follower.index',['followers' => $followers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('follower.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $followers = new FollowerUser();
        $followers->fill($request->all());
        $followers->save();
        return redirect('/followers/create')->with('success', 'Follower kreiran.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return FollowerUser::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $followers = FollowerUser::find($id);
        $users = User::all();

        return view('follower.edit', array('followers' => $followers, 'users' => $users));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $followers = FollowerUser::find($id);
        $followers -> fill($request->all());
        $followers -> save();

        return redirect('home')->with('success', 'Podatci azurirani.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $followers = FollowerUser::find($id);

        $followers -> delete();

        return redirect('/followers')->with('success', "Pratitelj izbrisan.");
    }
}
