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


    //shows all chats
    public function index()
    {

        $chats = Chat::all();

        return view('chats.index', compact('chats'));
    }

    //shows a specific chat
    public function show($id)
    {

        $chat = Chat::find($id);

        return view('chats.show', compact('chat'));
    }

    //stores a chat
    public function store(Request $request)
    {
            return $request->all();
//        $chat = new Chat;
//        $chat->id;
//        $chat->body = $request->body;
//
//        $chat->save();



        //$chats['body'] = $request->get('body');


        //return view('chats.createchat', compact('chat'));
    }

    //creates a chat
    public function create()
    {
        return view('chats.createchat');
    }

}
