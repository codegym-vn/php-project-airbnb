<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'checkIn', 'checkOut', 'totalPrice', 'customer_id', 'house_id'
    ];
}
