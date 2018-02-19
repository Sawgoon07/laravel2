<?php

namespace App;
use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function hasRole($role){
        $user = Auth::user();
        if(in_array($user->role,$role)){
            return true;
        }else{
            return false;
        }
    }
}
