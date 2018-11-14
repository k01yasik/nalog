<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function education_list()
    {
        return $this->belongsTo('App\EducationList');
    }
}
