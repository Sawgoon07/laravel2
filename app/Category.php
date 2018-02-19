<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	
     public function item(){
    	return $this->hasMany('App\Item','category_id');
    }

    public function menu(){
        return $this->belongsToMany('App\Menu', 'menu_category', 'category_id', 'menu_id'); //relationship between tables
    }
}


