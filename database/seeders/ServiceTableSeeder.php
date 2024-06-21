<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('services')-> insert([
        'service_name' => 'Breakfast Package',
        'service_desc' => "Experience a delightful start to your day with our carefully curated Breakfast Package.
                     Perfect for travelers seeking a nutritious and satisfying meal, our package offers a wide
                      variety of delicious options to suit all tastes and preferences.",
        'service_price' => 200
       ]);

       DB::table('services')-> insert([
        'service_name' => 'Mini Bar',
        'service_desc' => "Indulge in the convenience and luxury of our Mini Bar Package, 
        providing a tempting array of refreshments and snacks right at your fingertips.
         Whether you're craving a refreshing beverage after a long day of exploration or 
         a satisfying snack to satisfy your cravings",
        'service_price' => 150,
       ]);

       DB::table('services')-> insert([
        'service_name' => 'In-room Amenities',
        'service_desc' => "Elevate your stay with our In-Room Amenities Package,
                     designed to provide you with luxurious comforts
                      and conveniences for a truly indulgent experience.
                       From enhanced toiletries to plush bathrobes and
                        slippers, we ensure every moment of your stay is filled with relaxation and pampering.",
        'service_price' => 100,
       ]);

       DB::table('services')-> insert([
        'service_name' => 'Laundry Services',
        'service_desc' => "Relax and leave the laundry to us with our convenient Laundry Services Package. 
                    Whether you're traveling for business or pleasure, our professional laundry team
                     will ensure your clothes are fresh, clean, and neatly pressed, so you can focus on
                      enjoying your stay without worrying about the hassle of laundry.",
        'service_price' => 180,
       ]);

       DB::table('services')-> insert([
        'service_name' => 'Fitness Classes',
        'service_desc' => "Energize your body and mind with our Fitness Classes Package, 
                    offering a variety of invigorating workouts led by experienced instructors.
                     Whether you're a fitness enthusiast or looking to try something new, our
                      diverse selection of classes, including yoga, Pilates, and personalized training sessions,
                       ensures there's something for everyone to enjoy.",
        'service_price' => 250,
       ]);
    }
}
