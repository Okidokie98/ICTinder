<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $threads = Thread::all();
        // $threads = Thread::orderby('subject', 'desc')->get();
        $threads = Thread::orderby('created_at', 'desc')->paginate(5);
        return view('threads.index')->with('threads', $threads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('threads.create');
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
            'body' => 'required',
        ]);

        // Create Thread
        $thread = new Thread;
        $thread->subject = $request->input('subject');
        $thread->body = $request->input('body');
        $thread->type = $request->input('type');
        $thread->save();

        return redirect('/threads')->with('succes', 'Thread Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thread =  Thread::find($id);
        return view('threads.show')->with('thread', $thread);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thread =  Thread::find($id);
        return view('threads.edit')->with('thread', $thread);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'subject' => 'required',
            'body' => 'required',
        ]);

        // Create Thread
        $thread = Thread::find($id);
        $thread->subject = $request->input('subject');
        $thread->body = $request->input('body');
        $thread->type = $request->input('type');
        $thread->save();

        return redirect('/threads')->with('succes', 'Thread Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thread = Thread::find($id);
        $thread->delete();
        return redirect('/threads')->with('succes', 'Thread Removed');
    }
}
