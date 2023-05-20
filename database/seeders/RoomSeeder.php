<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'roomtypeid' => '1'
        ]);

        DB::table('rooms')->insert([
            'roomname' => 'Room-201',
            'area' => 'L2-001',
            'price' => '100000',
            'facility' => 'NonAC/Smoking',
            'roomtypeid' => '2'
        ]);

        DB::table('rooms')->insert([
            'roomname' => 'Room-202',
            'area' => 'L2-002',
            'price' => '100000',
            'facility' => 'NonAC/Smoking',
            'roomtypeid' => '2'
        ]);
    }
}
