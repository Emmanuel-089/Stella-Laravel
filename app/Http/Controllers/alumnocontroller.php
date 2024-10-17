<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnos;
use App\Models\carreras;
use Session;

class alumnoscontroller extends Controller
{


   public function reportealumno()
   {
   $reporte = alumnos::select('alumnos.ida', 'alumnos.clave  as matricula', 'alumnos.nombre', 'alumnos.edad', 'alumnos.cp','alumnos.sexo',
                              'alumnos.fecha','carreras.nombre as carre', 'alumnos.descripcion','alumnos.activo')
                ->join('carreras','carreras.idca','=','alumnos.idca')
                ->orderby('alumnos.nombre')
                ->get();
    return view('reporte1')
           ->with('reporte1',$reporte);

   }
//-------------------------------------------------------------------------

   public function altaalumno()
   {
    $carreras = \DB::select("select idca,nombre from carreras
    order by nombre asc");


    return view ('ejemplo1')->with('carreras',$carreras);
   }
//-------------------------------------------------------------------------

   public function guardaralumno(Request $request)
   {
    $this->validate($request,[
        'clave'=>'required|regex:/^[0-9]{6}$/',
        'nombre'=>'required|regex:/^[A-Z][A-Z,a-z, ,ó,í,á,é,ú,Á,É]+$/',
        'edad'=>'required|numeric|integer|max:99',
        'cp'=>'required|regex:/^[0-9]{5}$/',
        'sexo'=>'required',
        'fecha'=>'required|date',
        'idca'=>'required',
        'descripcion'=>'required',
    ]);

  


    $alumnos = new alumnos;
    $alumnos->clave = $request->clave;
    $alumnos->nombre = $request->nombre;
    $alumnos->edad = $request->edad;
    $alumnos->cp =$request->cp;
    $alumnos->sexo =$request->sexo;
    $alumnos->fecha= $request->fecha;
    $alumnos->idca=$request->idca;
    $alumnos->descripcion=$request->descripcion;
    $alumnos->activo='Si';
    $alumnos->save();


    Session::flash('mensaje', "El alumno con clave $request->clave ha dado de alta correctamente");
    return redirect()->route('reportealumno');
   }
//-------------------------------------------------------------------------
//-------------------------------------------------------------------------
   public function modificaalumno($ida)
   {

    $infoalu  = \DB::select("SELECT a.ida,a.clave, a.nombre,a.edad,
    a.cp,a.sexo,a.fecha, a.idca,c.nombre AS carre, a.descripcion
    FROM alumnos AS a
    INNER JOIN carreras AS c ON c.idca = a.idca
    WHERE a.ida = $ida");
    $carreras = carreras::where('idca','<>',$infoalu[0]->idca)
                        ->get();
   //return  $infoalu;
    return view('modificaalumno')
    ->with('infoalu',$infoalu[0])
    ->with('carreras',$carreras); 
   }
   //-------------------------------------------------------------------------
   
   public function editaralumno(Request $request)
   {
    $this->validate($request,[
        'clave'=>'required|regex:/^[0-9]{6}$/',
        'nombre'=>'required|regex:/^[A-Z][A-Z,a-z, ,ó,í,á,é,ú,Á,É]+$/',
        'edad'=>'required|numeric|integer|max:99',
        'cp'=>'required|regex:/^[0-9]{5}$/',
        'sexo'=>'required',
        'fecha'=>'required|date',
        'idca'=>'required',
        'descripcion'=>'required',
    ]);

  
   

    $alumnos = alumnos::find($request->ida);
    $alumnos->clave = $request->clave;
    $alumnos->nombre = $request->nombre;
    $alumnos->edad = $request->edad;
    $alumnos->cp =$request->cp;
    $alumnos->sexo =$request->sexo;
    $alumnos->fecha= $request->fecha;
    $alumnos->idca=$request->idca;
    $alumnos->descripcion=$request->descripcion;
    $alumnos->save();



      Session::flash('mensaje', "El alumno con clave $request->clave ha sido editado correctamente");
      return redirect()->route('reportealumno');
   

   }

//-------------------------------------------------------------------------
   /*public function eliminaalumno($ida){
   $alumnos=alumnos::find($ida);
   $alumnos->delete();
   return "Registro ELIMINADO";

   }*/

   public function eliminaalumno($ida){
      $alumnos=alumnos::find($ida);
      $alumnos->delete();
      Session::flash('mensaje', "El registro $ida ha sido eliminado correctamente");
      return redirect()->route('reportealumno');
   }
   //-----------------------------------------------------------------------
   public function desactivaalumno($ida){
      $alumnos=alumnos::find($ida);
      $alumnos->activo='No';
      $alumnos->save();
      Session::flash('mensaje', "El registro $ida ha sido desactivado correctamente");
      return redirect()->route('reportealumno');
   }
   //-----------------------------------------------------------------------
   public function activaalumno($ida){
      $alumnos=alumnos::find($ida);
      $alumnos->activo='Si';
      $alumnos->save();
      Session::flash('mensaje', "El registro $ida ha sido Activado correctamente");
      return redirect()->route('reportealumno');
   }

}