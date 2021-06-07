<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WeeksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('weeks')->insert([
                'week_weeksday' => random_int(1, 50),
                'status_check' => random_int(1, 3),
                'diary_id' => random_int(1, 3),
            ]);
        }
    }
}
