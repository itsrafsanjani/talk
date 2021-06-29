<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use YoHang88\LetterAvatar\LetterAvatar;

class User extends Authenticatable
{
    use Notifiable;

    const PAGINATE_COUNT = 20;

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


    public function getAvatarAttribute()
    {
        return new LetterAvatar($this->name);
    }
}
