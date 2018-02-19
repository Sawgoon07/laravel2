<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    public function items()
    {
        return $this->hasMany('App\BookingItem', 'booking_id', 'item_id');
    }

    public function categoryGroup()
    {
        return $this->belongsTo('App\CategoryGroup', 'category_id');
    }

    public function shift()
    {
        return $this->belongsTo('App\Shift', 'shift_id');
    }

    public function hall()
    {
        return $this->belongsTo('App\Hall', 'hall_id');
    }

    public function menu()
    {
        return $this->belongsTo('App\Menu', 'menu_id');
    }


}
