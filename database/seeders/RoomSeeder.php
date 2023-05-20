<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'roomname' => 'Room-001',
            'area' => 'L1-001',
            'price' => '200000',
            'facility' => 'AC/NonSmoking',
        ]);

        DB::table('rooms')->insert([
            'roomname' => 'Room-101',
            'area' => 'L2-001',
            'price' => '100000',
            'facility' => 'NonAC/Smoking',
        ]);
    }
}
