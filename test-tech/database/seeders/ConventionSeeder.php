<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ConventionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Convention')->insert([
            'nom' => 'Apprentisage du HTML',
            'nbHeur' => 3
        ]);
        DB::table('Convention')->insert([
            'nom' => 'Apprentisage du Javascript',
            'nbHeur' => 8
        ]);
        DB::table('Convention')->insert([
            'nom' => 'Apprentisage du Laravel',
            'nbHeur' => 10
        ]);
    }
}
