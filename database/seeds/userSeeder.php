<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Nguyễn Xuân Tâm';
        $user->email = 'alexnguyen17@gmail.com';
        $user->password = 'alexnguyen';
        $user->phone = '0976681499';
        $user->role = '1';
        $user->save();
    }
}
