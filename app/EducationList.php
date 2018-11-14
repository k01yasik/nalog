<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationList extends Model
{
    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function education()
    {
        $this->hasMany('App\Education');
    }
}
