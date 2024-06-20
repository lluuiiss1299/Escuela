<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumnos')->delete();

        DB::table('alumnos')->insert([
            'nombre' => 'juan perez ',
            'direccion' => 'calle alegria queretaro mexico',
            'correo' => 'juanperez@gmail.com',
            'telefono' => '2012321039',
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'alberto gutierrez',
            'direccion' => 'calle zapopan morelos mexico',
            'correo' => 'albertogu@gmail.com',
            'telefono' => '76657563454',
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'cecilia tapia',
            'direccion' => 'calle buenavista cdmx mexico',
            'correo' => 'ceci934@gmail.com',
            'telefono' => '34534534345',
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'oscar jesus',
            'direccion' => 'calle rancho grande yucatan mexico',
            'correo' => 'oscarjesu@gmail.com',
            'telefono' => '54645645645',
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'elena ramirez',
            'direccion' => 'calle revolución tijuana mexico',
            'correo' => 'elena394@gmail.com',
            'telefono' => '1321276878',
        ]);

        DB::table('alumnos')->insert([
            'nombre' => 'luis gerardo',
            'direccion' => 'calle bosque viejo chihuhua mexico',
            'correo' => 'luispoa@gmail.com',
            'telefono' => '897035243432',
        ]);
    }
}
