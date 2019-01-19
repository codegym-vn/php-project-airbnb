<?php

namespace App\Http\Controllers;

use App\House;

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

    public function searchHouse($keyword)
    {
        switch ($keyword) {
            case '1':
                 $houses = House::whereBetween('price', [500000, 1000000])->get();
                break;
            case '2':
                 $houses = House::whereBetween('price', [1000001, 1500000])->get();
                break;
            case '3':
                 $houses = House::whereBetween('price', [1500001, 2000000])->get();
                break;
            case '4':
                 $houses = House::whereBetween('price', [2000001, 2500000])->get();
                break;
        }

        return response()->json($houses);
    }
}
