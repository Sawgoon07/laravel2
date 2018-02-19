<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function category(){
        return $this->belongsToMany('App\Category', 'menu_category', 'menu_id', 'category_id'); //relationship between tables
    }
}
