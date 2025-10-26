<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '春',
            'created_at' => '2025-10-26',
            'updated_at' => '2025-10-26'
        ];
        DB::table('seasons')->insert($param);
        $param = [
            'name' => '夏',
            'created_at' => '2025-10-26',
            'updated_at' => '2025-10-26'
        ];
        DB::table('seasons')->insert($param);
        $param = [
            'name' => '秋',
            'created_at' => '2025-10-26',
            'updated_at' => '2025-10-26'
        ];
        DB::table('seasons')->insert($param);
        $param = [
            'name' => '冬',
            'created_at' => '2025-10-26',
            'updated_at' => '2025-10-26'
        ];
        DB::table('seasons')->insert($param);
    }
}
