<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills =  Skill::all();
        return view('skills.index')->with('skills', $skills);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
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
            'skill' => 'required',
            'difficulty' => 'required',
            'body' => 'required',
            'info_link' => 'required'
            ]);

            $skill = new Skill;
            $skill->skill = $request->input('skill');
            $skill->difficulty = $request->input('difficulty');
            $skill->body = $request->input('body');
            $skill->info_link = $request->input('info_link');
            $skill->save();

            return redirect('/skills')->with('success', 'Language added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skill = Skill::find($id);
        return view('skills.show')->with('skills', $skill);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('skills.edit')->with('skills', $skill);
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
            'skill' => 'required',
            'difficulty' => 'required',
            'body' => 'required',
            'info_link' => 'required'
            ]);

            $skill = Skill::find($id);
            $skill->skill = $request->input('skill');
            $skill->difficulty = $request->input('difficulty');
            $skill->body = $request->input('body');
            $skill->info_link = $request->input('info_link');
            $skill->save();

            return redirect('/skills')->with('success', 'Language updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect('/skills')->with('success', 'Language removed');
    }
}
