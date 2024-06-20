<?php

namespace App\Console\Commands;
use App\Models\Maestros;
use Illuminate\Console\Command;
use DB;
class ViewMaestro extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:view-maestro {idMaestro=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ver los alumnos que se asignaron por maestro';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $idMaestro = $this->arguments()['idMaestro'];
        $maestros = DB::table('rel_alumnos_maestros as rel')
                    ->join('maestros','rel.idMaestro','maestros.idMaestro')
                    ->join('alumnos as a','rel.idAlumno','a.idAlumno')
                    ->where('rel.idMaestro',$idMaestro)
                    ->select('*','a.nombre as nombreAlumno','maestros.nombre as nombreMaestro')
                    ->get();
        $lista = 'Lista de alumnos del maestr@ '. $maestros[0]->nombreMaestro . ' para la materia '. $maestros[0]->materia. PHP_EOL;
        foreach ($maestros as $key => $maestro) {
            $lista .= $maestro->nombreAlumno . PHP_EOL;
        }
        echo $lista;
    }
}
