<?php

namespace App\Http\Controllers;

use App\House;
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

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        switch ($keyword) {
            case '1':
                return $houses = House::whereBetween('price', [500000, 1000000])->get();
                break;
            case '2':
                return $houses = House::whereBetween('price', [1000000, 1500000])->get();
                break;
            case '3':
                return $houses = House::whereBetween('price', [1500000, 2000000])->get();
                break;
            case '4':
                return $houses = House::whereBetween('price', [2000000, 2500000])->get();
                break;
        }

    }
}
