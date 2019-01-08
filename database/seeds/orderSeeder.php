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
        $order->save();

        $order = new \App\Order();
        $order->checkIn = '2018/12/15';
        $order->checkOut = '2018/12/16';
        $order->totalPrice = '900000';
        $order->save();

    }
}
