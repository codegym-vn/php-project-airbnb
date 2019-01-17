<?php

use Illuminate\Database\Seeder;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $login = new \App\Login();
        $login->email = 'manhsanhcong.08@gmail.com';
        $login->password = 'manhsanhcong';
        $login->save();
    }
}
