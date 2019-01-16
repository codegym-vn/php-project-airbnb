<?php

namespace App\Http\Controllers;

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
        $order->save();
    }
}
