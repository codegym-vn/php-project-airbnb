<?php

namespace App\Http\Controllers;

use App\House;
use App\User;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function indexHouse()
    {
        return House::get();
    }

    public function showHouse($id)
    {
        return House::find($id);
    }





}
