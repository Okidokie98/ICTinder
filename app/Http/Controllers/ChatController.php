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


        return view('overview.index', compact('chats'));
    }

    public function show($chat_id)
    {


        $chat = Chat::find($chat_id);


        return view('overview.show', compact('chat'));
    }
}
