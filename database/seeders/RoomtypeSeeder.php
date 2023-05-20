<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoomtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roomtypes')->insert([

            'roomtype' => 'Twin'
        ]);

        DB::table('roomtypes')->insert([

            'roomtype' => 'Superior'
        ]);

        DB::table('roomtypes')->insert([

            'roomtype' => 'Standard'
        ]);
    }
}
