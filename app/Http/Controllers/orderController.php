<?php

namespace App\Http\Controllers;

use App\House;
use App\Order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index()
    {
        return Order::get();
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->checkIn = $request->checkIn;
        $order->checkOut = $request->checkOut;
        $order->totalPrice = $request->totalPrice;
        $order->house_id = $request->house_id;
        $order->save();

        $house = House::findOrFail($order->house_id);
        $house->status = 'Đã cho thuê';
        $house->save();
    }
}
