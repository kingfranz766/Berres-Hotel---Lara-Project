<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoomTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(StaffTableSeeder::class);
    }

    //Ps. Run "php artisan db:seed"
}
