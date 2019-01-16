<?php

use Illuminate\Database\Seeder;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new \App\Order();
        $order->checkIn = '2018/12/14';
        $order->checkOut = '2018/12/16';
        $order->totalPrice = '2700000';
        $order->customer_id = 1;
        $order->house_id = 1;
        $order->save();

        $order = new \App\Order();
        $order->checkIn = '2018/12/15';
        $order->checkOut = '2018/12/16';
        $order->totalPrice = '900000';
        $order->customer_id = 1;
        $order->house_id = 2;
        $order->save();

        $order = new \App\Order();
        $order->checkIn = '2018/12/26';
        $order->checkOut = '2018/12/28';
        $order->totalPrice = '2600000';
        $order->customer_id = 1;
        $order->house_id = 1;
        $order->save();

        $order = new \App\Order();
        $order->checkIn = '2018/12/27';
        $order->checkOut = '2018/12/28';
        $order->totalPrice = '1500000';
        $order->customer_id = 1;
        $order->house_id = 2;
        $order->save();

        $order = new \App\Order();
        $order->checkIn = '2018/12/18';
        $order->checkOut = '2018/12/19';
        $order->totalPrice = '900000';
        $order->customer_id = 1;
        $order->house_id = 2;
        $order->save();
    }
}
