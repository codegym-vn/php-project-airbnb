<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'title', 'description', 'content','price', 'address', 'status', 'image', 'image1', 'image2'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
