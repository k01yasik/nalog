<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function news()
    {
        return $this->hasMany('App\News');
    }

    public function soft()
    {
        return $this->hasMany('App\Soft');
    }

    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function education_lists()
    {
        return $this->hasMany('App\EducationList');
    }

    public function education()
    {
        return $this->hasMany('App\Education');
    }

    public function answer()
    {
        return $this->hasMany('App\Answer');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
}
