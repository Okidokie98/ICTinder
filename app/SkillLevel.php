<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillLevel extends Model
{
    //  Table Name
    protected $table = 'skill_levels';

    //  Primary Key
    public $primaryKey = 'id';

    //  Timestamps
    public $timestamps = true;
}
