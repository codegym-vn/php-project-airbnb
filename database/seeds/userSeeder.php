<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $user->password = Hash::make('alexnguyen');
        $user->phone = '0976681499';
        $user->role = '1';
        $user->save();
    }
}
