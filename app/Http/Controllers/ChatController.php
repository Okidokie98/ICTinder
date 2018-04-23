<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Chat;
class ChatController extends Controller
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

        $chats = Chat::all();

        return view('chats.index', compact('chats'));
    }

    public function show($id)
    {

        $chat = Chat::find($id);

        return view('chats.show', compact('chat'));
    }
}
