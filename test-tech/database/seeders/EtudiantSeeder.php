<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Etudiant')->insert([
            'nom' => 'Rossinante',
            'prenom' => 'Annette',
            'mail' => 'mail@gmail.com',
            'convention' => 1
        ]);

        DB::table('Etudiant')->insert([
            'nom' => 'Da Costa',
            'prenom' => 'Papa',
            'mail' => 'unmail@hotmail.com',
            'convention' => 2
        ]);

        DB::table('Etudiant')->insert([
            'nom' => 'Nasa',
            'prenom' => 'Celeste',
            'mail' => 'mailvide@hotmail.com',
            'convention' => 2
        ]);
    }
}
