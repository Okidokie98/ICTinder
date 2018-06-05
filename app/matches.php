<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\skill;

class matches extends Model
{
    public function skill()
    {
        return $this->hasOne('App\Skill');
    }

    public function users()
    {
        return $this->hasmany('App\user');
    }

    static function skills(String $skill)
    {
        $skill = request('skill');
        $matchskill = skill::where('skill', $skill)->get();
        foreach($matchskill as $skill){
          $id = $skill->id;  
        };
        return $id;
    }

    static function tutor($id)
    {
        $tutorMatches = matches::where('tutor_id', $id)->get();
        return $tutorMatches;
    }

    static function student($id)
    {
        $studentMatches = matches::where('student_id', $id)->get();
        return $studentMatches;
    }
    public function 
}
