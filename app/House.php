<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'title', 'description', 'quantityOfBedroom', 'quantityOfBathroom', 'price', 'address', 'status', 'image', 'customer_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $casts = [
        'image' => 'array'
    ];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    private static $singleObj = null;


//    public static function createSingletonObject()
//    {
//        if (self::$singleObj !== null) {
//            return self::$singleObj;
//        }
//
//        self::$singleObj = new self();
//        return self::$singleObj;
//    }

}
