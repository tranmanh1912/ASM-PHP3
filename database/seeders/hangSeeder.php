<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hangs')
            ->insert([
                ['tenhang' => 'Iphone'],
                ['tenhang' => 'Samsung'],
                ['tenhang' => 'Xiaomi'],
                ['tenhang' => 'Oppo'],
                ['tenhang' => 'Nubia']
            ]);
    }
}
