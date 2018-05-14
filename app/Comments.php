<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'comment',
    ];

    public function comments() {
        return$this->hasMany('App\Comment');
    }
}
