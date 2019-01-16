<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);
        $this->call(customerSeeder::class);
        $this->call(houseSeeder::class);
//        $this->call(orderSeeder::class);
    }
}
