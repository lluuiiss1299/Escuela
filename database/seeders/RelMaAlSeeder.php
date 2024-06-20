<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class RelMaAlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rel_alumnos_maestros')->delete();

        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 2,
            'idAlumno' => 1,
        ]);
        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 5,
            'idAlumno' => 2,
        ]);
        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 1,
            'idAlumno' => 5,
        ]);
        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 1,
            'idAlumno' => 2,
        ]);
        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 2,
            'idAlumno' => 2,
        ]);
        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 3,
            'idAlumno' => 4,
        ]);
        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 6,
            'idAlumno' => 1,
        ]);
        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 4,
            'idAlumno' => 5,
        ]);
        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 5,
            'idAlumno' => 6,
        ]);
        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 4,
            'idAlumno' => 1,
        ]);
        DB::table('rel_alumnos_maestros')->insert([
            'idMaestro' => 6,
            'idAlumno' => 6,
        ]);
    }
}
