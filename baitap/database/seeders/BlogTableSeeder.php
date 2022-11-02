<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'category_id' => 1,
                'name' => 'Sự bay hơi',
                'description' => 'Quốc Khang'
            ],
            [
                'category_id' => 2,
                'name' => 'Vũ trụ',
                'description' => 'Phong Tâm'
            ],
            [
                'category_id' => 1,
                'name' => 'Co2',
                'description' => 'Hữu Nhân'
            ]
        ]);
    }
}
