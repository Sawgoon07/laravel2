<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public function hall(){
    	return $this->hasMany('App\Hall','shifts_id');
    }
}
