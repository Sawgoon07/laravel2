<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingItem extends Model
{
    protected $table = 'booking_items';

    public function item() {
        return $this->belongsTo('App\Item', 'item_id');
    }
}
