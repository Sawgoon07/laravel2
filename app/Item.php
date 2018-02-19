<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    
    public function item(){
    	return $this->belongTo(App\Category);
    }

    public function booking(){
    	return $this->hasMany('booking','item_id');
    }
}

