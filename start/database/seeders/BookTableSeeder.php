<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'category_id' => 1,
                'name' => 'Vợ nhặt',
                'price' => 1234,
                'description' => 'Hữu Nhân'
            ],
            [
                'category_id' => 2,
                'name' => 'Vũ trụ',
                'price' => 1234,
                'description' => 'hh'
            ],
            [
                'category_id' => 1,
                'name' => 'Lão Hạc',
                'price' => 1234,
                'description' => 'Hữu Nhân'
            ]
        ]);
    }
}
