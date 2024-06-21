<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staffs')-> insert([
            'user_name' => 'king_staff',
            'password' => Hash::make('kingstaff123'),
            'staff_name' => 'King Francis Bernasol',
            'age' => 19,
            'email' => 'kingstaff@gmail.com',
            'phone_num' => '09856531403'
        ]);
    }
}
