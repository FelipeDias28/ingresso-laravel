<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_events')->insert([
            'name' => 'company',
        ]);

        DB::table('type_events')->insert([
            'name' => 'graduation',
        ]);
    }
}
