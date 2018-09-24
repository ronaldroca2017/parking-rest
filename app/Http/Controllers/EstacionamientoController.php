<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Estacionamiento;
use App\EstacionamientoHorario;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class EstacionamientoController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $estacionamiento =  Estacionamiento::all()->toArray();
       
        dd($estacionamiento);
    
        return response()->json([
            'status' => 'ok',
            'data' => $estacionamiento
        ]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estacionamiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$status = 'error';
		$data = null;

    try{
     
        DB::beginTransaction();

        $estacionamiento = new Estacionamiento;
        $estacionamiento->id_tipo_propiedad=$request->get('txt_idTipopropiedad');
        $estacionamiento->id_tipo_estacionamiento=$request->get('txt_idTipoEstacionamiento');
        $estacionamiento->nombre=$request->get('nombre');
        $estacionamiento->direccion=$request->get('direccion');
        $estacionamiento->latitud=$request->get('latitud');
        $estacionamiento->longitud=$request->get('longitud');
        $estacionamiento->estado='1';
        $estacionamiento->id_usuario = '1';
        $estacionamiento->save();
 
 

        //$fechacActual = Carbon::now('America/Lima');
        $dia=$request->get('dia');
        $fechaSeleccionada=$request->get('fechaSeleccionada'); 
        $hora_ingreso=$request->get('h_ingreso');
        $hora_salida=$request->get('h_salida');
        $tarifa=$request->get('tarifa');
        $id_usuario=1;  
        

          
        $count = 0; 
 
        while ($count < count($dia)){
     
        $estacionamientoHorario = new EstacionamientoHorario();
        $estacionamientoHorario->id_estacionamiento= $estacionamiento->id;
        $estacionamientoHorario->dia=$dia[$count];
        $estacionamientoHorario->fecha_calendario=$fechaSeleccionada[$count];
        $estacionamientoHorario->hora_ingreso=$hora_ingreso[$count];
        $estacionamientoHorario->hora_salida=$hora_salida[$count]; 
        $estacionamientoHorario->tarifa=$tarifa[$count];
        $estacionamientoHorario->reservado=0;  
        $estacionamientoHorario->save();

            $count = $count + 1;
        } 

    
		$status = 'ok';
		$data = $estacionamiento;
        DB::commit();


        }catch(\Exception $e){
             DB::rollback();
             dd('jejejjeje : '.$e);
             return "ERROR AL RESGISTRAR";
        }

        /*
      
       $estacionamientoHorario2 = new EstacionamientoHorario();
        foreach ($estacionamientoHorarioArray as $key => $value) {
            if (is_array($value)) {
                $value = convertToObject($value);
            }
            $estacionamientoHorario2 = $value;

              $estacionamientoHorario2->save();
        }*/
      
        //return Redirect::to('estacionamiento.create'); 
        return response()->json([
				'status' => $status,
				'data' => $data
				]);

    }  


 public function arreglo(Request $request)
    {

 
        //$ldate = date('Y-m-d');
        $fechacActual = Carbon::now('America/Lima');

        $estacionamientoHorario = new EstacionamientoHorario;
        $estacionamientoHorario->id_estacionamiento=3;
        $estacionamientoHorario->dia='viernes';
        $estacionamientoHorario->fecha_calendario=$fechacActual;
        $estacionamientoHorario->hora_ingreso='08:00';
        $estacionamientoHorario->hora_salida='16:00';
        $estacionamientoHorario->tarifa=20.00;
        $estacionamientoHorario->id_usuario=1;  
      

        $estacionamientoHorarioArray = array($estacionamientoHorario);

      
 

         return view('estacionamiento.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
