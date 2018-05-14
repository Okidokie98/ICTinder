<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.profile');
    }

    public function show($id)
    {
        $users = User::where('id', $id)->get();

        return view('profile.profile', compact('users'));
    }

    public function edit($id)
    {
        return view('profile.EditProfile', compact('id'));
    }

    public function delete($id)
    {
        $ids = $id;
        return view('profile.deleteProfile', compact('ids'));
    }

    public function deleted($id)
    {
        $delete = User::toDelete($id);
        return redirect('/');
    }

    public function update($id)
    {
        var_dump(request('name'));
    }
}
