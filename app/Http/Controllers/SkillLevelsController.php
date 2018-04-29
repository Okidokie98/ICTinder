<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SkillLevel;
use DB;

class SkillLevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skilllevels = SkillLevel::orderBy('skillName', 'asc')->get();
        return view('skilllevels.index')->with('skilllevels', $skilllevels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skilllevels.create');
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
            'skillName' => 'required',
            'skillDescription' => 'required',
        ]);

        // Create new skill
        $skilllevel = new SkillLevel;
        $skilllevel->skillName = $request->input('skillName'); 
        $skilllevel->skillDescription = $request->input('skillDescription'); 
        $skilllevel->save();

        return redirect('/skilllevels')->with('succes', 'Skill added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skilllevel = SkillLevel::find($id);
        return view('skilllevels.show')->with('skilllevel', $skilllevel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skilllevel = SkillLevel::find($id);
        return view('skilllevels.edit')->with('skilllevel', $skilllevel);
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
            'skillName' => 'required',
            'skillDescription' => 'required',
        ]);

        // Create new skill
        $skilllevel = SkillLevel::find($id);
        $skilllevel->skillName = $request->input('skillName'); 
        $skilllevel->skillDescription = $request->input('skillDescription'); 
        $skilllevel->save();

        return redirect('/skilllevels')->with('succes', 'Skill edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skilllevel = SkillLevel::find($id);
        $skilllevel->delete();

        return redirect('/skilllevels')->with('succes', 'Skill deleted!');
    }
}
