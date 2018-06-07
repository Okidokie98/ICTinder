<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    static function skillname($id)
    {
        $skillname = Skill::where('id', $id)->get();
        $name = $skillname[0]->skill;
        return $name;
    }

}
