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

}
