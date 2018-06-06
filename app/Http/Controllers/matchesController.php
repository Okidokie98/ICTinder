<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skill;
use App\matches;
use App\User;

class matchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('match.matches');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $skills = skill::all();
        return view('match.newMatch', compact('skills', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //haal het id van de skill 
        $skill_name = request('skill');
        $skills_id = matches::skills($skill_name);
        //haal het id van de nieuwe tutor op
        $tutor_id = matches::findMatch($skills_id, $id);

        //stuur de data door naar de database
        $match = new matches;
        $match->tutor_id = $tutor_id;
        $match->student_id = $id;
        $match->skill_id = $skills_id;
        $match->save();
        return redirect('/matches/'.$id)->with('success', 'we found a match for you');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //haal de matches op uit de database
        $Tmatch = matches::tutor($id);
        $Smatch = matches::student($id);

        //tellen van de matches voor de loop
        $tCount = count($Tmatch);
        $sCount = count($Smatch);

        //haal de namen van de student op bij tutor matches
        $TutorStudentName = [];
        for($i=0;$i<$tCount;$i++){
            $TutorStudentName[$i] = [User::username($Tmatch[$i]->student_id)];
        }
         //haal de namen van de skills op bij tutor match
        $TutorSkillName = [];
        for($i=0;$i<$tCount;$i++){
            $TutorSkillName[$i] = [skill::skillname($Tmatch[$i]->skill_id)];
        }
        //haal de namen van de tutor op bij student match
        $StudentTutorName = [];
        for($i=0;$i<$sCount;$i++){
            $StudentTutorName[$i] = [User::username($Smatch[$i]->tutor_id)];
        }
        //haal de namen van de skill op bij student match
        $StudentSkillName = [];
        for($i=0;$i<$sCount;$i++){
            $StudentSkillName[$i] = [skill::skillname($Smatch[$i]->skill_id)];
        }

        return view('match.matches', compact('TutorStudentName','StudentTutorName','TutorSkillName', 'StudentSkillName', 'tCount', 'sCount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

   
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
        //
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
