<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaestroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('maestros')->delete();

        DB::table('maestros')->insert([
            'nombre' => 'alberto ruiz',
            'direccion' => 'calle 10 de mayo baja california mexico',
            'correo' => 'albertoruiz@gmail.com',
            'telefono' => '123125435',
        ]);

        DB::table('maestros')->insert([
            'nombre' => 'fernanda montez',
            'direccion' => 'calle montes de oca saltillo mexico',
            'correo' => 'fer328@gmail.com',
            'telefono' => '5465675453',
        ]);

        DB::table('maestros')->insert([
            'nombre' => 'arturo lopez',
            'direccion' => 'calle hipno san luis mexico',
            'correo' => 'arturolop@gmail.com',
            'telefono' => '34654623314',
        ]);



        DB::table('maestros')->insert([
            'nombre' => 'juan medina',
            'direccion' => 'calle rancho bonito yucatan mexico',
            'correo' => 'juanmedina@gmail.com',
            'telefono' => '437657354', 
        ]);

        DB::table('maestros')->insert([
            'nombre' => 'eliseo cadena',
            'direccion' => 'calle amlo gerrero mexico',
            'correo' => 'eliseocad@gmail.com',
            'telefono' => '464352433',
        ]);

        DB::table('maestros')->insert([
            'nombre' => 'roberto solano',
            'direccion' => 'calle viejo camino chiapas mexico',
            'correo' => 'robertosolano@gmail.com',
            'telefono' => '4354364523',
        ]);
    }
}
