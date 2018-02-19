<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    public function hall(){
    	return $this->belongTo(App\shift);
    }
}
