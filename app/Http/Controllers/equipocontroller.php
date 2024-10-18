<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\antivirus;
use App\Models\area;
use App\Models\categoria;
use App\Models\departamento;
use App\Models\discoduro;
use App\Models\edificio;
use App\Models\equipos;
use App\Models\licenciaso;
use App\Models\marca;
use App\Models\monitor;
use App\Models\office;
use App\Models\procesador;
use App\Models\ram;

use Session;

class EquipoController extends Controller
{
   public function reportecomputadora()
   {
      $reporte = equipos::select('equipos.idequipo','edificio.nombreEdf','departamento.nombreDepto','area.nombreArea',
                                 'categoria.nombreCatego','marca.nombreMarca','procesador.nombreProcesador','ram.capacidadRam',
                                 'discoduro.capacidadDiscoDuro','licenciaso.nombreLicSo','licencia_legal_so'
                              ,'office.nombreLicOffice','licencia_legal_office','monitor.nombreMonitor','antivirus.nombreLicAntivirus')
                ->join('antivirus','antivirus.idlicantivirus','=','equipos.idlicantivirus')
                ->join('edificio','edificio.idedf','=','equipos.idedf')
                ->join('departamento','departamento.iddepto','=','equipos.iddepto')
                ->join('area','area.idarea','=','equipos.idarea')
                ->join('categoria','categoria.idcatego','=','equipos.idcatego')
                ->join('marca','marca.idmarca','=','equipos.idmarca')
                ->join('procesador','procesador.idprocesador','=','equipos.idprocesador')
                ->join('ram','ram.idram','=','equipos.idram')
                ->join('discoduro','discoduro.iddiscoduro','=','equipos.iddiscoduro')
                ->join('licenciaso','licenciaso.idlicenciaso','=','equipos.idlicenciaso')
                ->join('office','office.idlicoffice','=','equipos.idlicoffice')
                ->join('monitor','monitor.idmonitor','=','equipos.idmonitor')
                //->join('antivirus','antivirus.idlicantivirus','=','equipos.idlicantivirus')
                //->orderby('equipos.idequipo')

                ->get();
    return view('reporte1')
           ->with('reporte1',$reporte);

   }
}