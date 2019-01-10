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
        $user->provider = '';
        $user->role = '1';
        $user->save();

        $user = new \App\User();
        $user->name = 'Lê Thị Mỹ Hoàn';
        $user->email = 'manhsanhcong.08@gmail.com';
        $user->password = Hash::make('manhsanhcong');
        $user->phone = '5664133150';
        $user->provider = '';
        $user->role = '1';
        $user->save();

        $user = new \App\User();
        $user->name = 'ban tam';
        $user->email = 'abc@gmail.com';
        $user->password = Hash::make('asdasd');
        $user->phone = '0976681499';
        $user->provider = '';
        $user->role = '1';
        $user->save();
    }
}
