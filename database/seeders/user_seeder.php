<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_table')->insert([
            [
            'name'=>'sifat',
            'email'=>'sifat@gmail.com',
            'password'=>hash::make('1234')
            ],

            [
                'name'=>'fahim',
                'email'=>'fahim@gmail.com',
                'password'=>hash::make('1234')
            ]
        ]);
    }
}
