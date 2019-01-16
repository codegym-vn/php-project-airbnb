<?php

use Illuminate\Database\Seeder;
use App\Customer;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->name = 'Tam';
        $customer->password = 'asdasd';
        $customer->email = 'abc@abc.com';
        $customer->phone = '0935806852';
        $customer->address = 'My Dinh';
        $customer->save();
    }
}
