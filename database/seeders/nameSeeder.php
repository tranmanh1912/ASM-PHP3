<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class nameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('names')->insert([
                'tensp' => $faker->text(10),
                'anh' => 'https://i.pcmag.com/imagery/reviews/02JF4EbzYl5aEHzc8RHqvZg-8.jpg',
                'price' => $faker->randomFloat(2, 100000, 1000000),
                'soluong' => $faker->numberBetween(50, 1000),
                'category_id' => rand(1, 5)
            ]);
        }
    }
}
