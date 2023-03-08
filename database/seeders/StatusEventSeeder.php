<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatusEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_events')->insert([
            'name' => 'active',
        ]);

        DB::table('status_events')->insert([
            'name' => 'finished',
        ]);
    }
}
