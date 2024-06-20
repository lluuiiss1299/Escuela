<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clase')->delete();

        DB::table('clase')->insert([
            'materia' => 'Español',
            'horario' => '10:20 AM',
            'idMaestro' => 1,

        ]);

        DB::table('clase')->insert([
            'materia' => 'Fisica',
            'horario' => '13:40 PM',
            'idMaestro' => 2,
        ]);

        DB::table('clase')->insert([
            'materia' => 'Matematicas',
            'horario' => '08:AM',
            'idMaestro' => 3,
        ]);
        DB::table('clase')->insert([
            'materia' => 'Matematicas',
            'horario' => '08:AM',
            'idMaestro' => 4,
        ]);
        DB::table('clase')->insert([
            'materia' => 'Matematicas',
            'horario' => '08:AM',
            'idMaestro' => 5,
        ]);
    }
}
