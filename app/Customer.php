<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'password', 'email', 'phone', 'address', 'checkIn', 'checkOut'
    ];
}
