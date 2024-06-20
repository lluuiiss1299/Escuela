<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class RelClaseAlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rel_clase_alumnos')->delete();

        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 1,
            'idAlumno' => 1,
        ]);
        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 2,
            'idAlumno' => 2,
        ]);
        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 3,
            'idAlumno' => 3,
        ]);
        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 4,
            'idAlumno' => 4,
        ]);
        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 5,
            'idAlumno' => 5,
        ]);
        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 6,
            'idAlumno' => 6,
        ]);
        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 1,
            'idAlumno' => 5,
        ]);
        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 2,
            'idAlumno' => 4,
        ]);
        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 3,
            'idAlumno' => 6,
        ]);
        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 4,
            'idAlumno' => 2,
        ]);
        DB::table('rel_clase_alumnos')->insert([
            'idClase' => 5,
            'idAlumno' => 1,
        ]);
    }
}
