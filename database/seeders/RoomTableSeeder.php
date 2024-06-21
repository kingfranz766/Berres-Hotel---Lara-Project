<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')-> insert([
            'roomnumber' => 1,
            'roomtype' => 'Single Room',
            'pricepernight' => 800,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 2,
            'roomtype' => 'Single Room',
            'pricepernight' => 800,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 3,
            'roomtype' => 'Single Room',
            'pricepernight' => 800,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 4,
            'roomtype' => 'Single Room',
            'pricepernight' => 800,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 5,
            'roomtype' => 'Single Room',
            'pricepernight' => 800,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 6,
            'roomtype' => 'Double Room',
            'pricepernight' => 1200,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 7,
            'roomtype' => 'Double Room',
            'pricepernight' => 1200,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 8,
            'roomtype' => 'Double Room',
            'pricepernight' => 1200,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 9,
            'roomtype' => 'Double Room',
            'pricepernight' => 1200,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 10,
            'roomtype' => 'Double Room',
            'pricepernight' => 1200,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 11,
            'roomtype' => 'Triple Room',
            'pricepernight' => 1500,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 12,
            'roomtype' => 'Triple Room',
            'pricepernight' => 1500,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 13,
            'roomtype' => 'Triple Room',
            'pricepernight' => 1500,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 14,
            'roomtype' => 'Triple Room',
            'pricepernight' => 1500,
            'availability' => 'available',
        ]);

        DB::table('rooms')-> insert([
            'roomnumber' => 15,
            'roomtype' => 'Triple Room',
            'pricepernight' => 1500,
            'availability' => 'available',
        ]);
    }
}
