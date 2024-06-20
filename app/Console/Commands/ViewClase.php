<?php

namespace App\Console\Commands;
use App\Models\Clase;
use Illuminate\Console\Command;
use DB;
class ViewClase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:view-clase {idMaestro=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ver las clases, maestro y estudiantes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $idClase = $this->arguments()['idMaestro'];
        $maestros = DB::table('rel_clase_alumnos as rel')
                    ->join('clase','rel.idClase','clase.id_clase')
                    ->join('alumnos as a','rel.idAlumno','a.idAlumno')
                    ->join('maestros','clase.idMaestro', 'maestros.idMaestro')
                    ->where('rel.idClase',$idClase)
                    ->select('*','a.nombre as nombreAlumno','maestros.nombre as nombreMaestro')
                    ->get();
        if(count($maestros) != 0){
            $lista = 'Lista para la materia '. $maestros[0]->materia.PHP_EOL;
            $lista .= 'Maestro: '. $maestros[0]->nombreMaestro . PHP_EOL;
    
            foreach ($maestros as $key => $maestro) {
                $lista .= 'Alumno: '.$maestro->nombreAlumno . PHP_EOL;
            }
            echo $lista;
        }else{
            echo 'Clase inexistente';
        }
    }
}
