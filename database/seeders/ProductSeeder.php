<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'ショートケーキ',
            'price' => 600,
            'type' => 'unbacked',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('products')->insert([
            'name' => 'チョコレート',
            'price' => 550,
            'type' => 'unbacked',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('products')->insert([
            'name' => 'ミルフィユ 8個',
            'price' => 1150,
            'type' => 'backed',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('products')->insert([
            'name' => 'ミルフィユ 16個',
            'price' => 2200,
            'type' => 'backed',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('products')->insert([
            'name' => 'ミルフィユ 24個',
            'price' => 3000,
            'type' => 'backed',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
