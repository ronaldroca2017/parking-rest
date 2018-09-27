<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\Auto;
use App\Estacionamiento;
use App\EstacionamientoHorario;

use IronMQ\IronMQ;

class SolicitudController extends Controller
{
    private $ironmq;
    private $queue_name;

    function __construct () {
        $this->ironmq = new IronMQ([
            "token" => env('IRON_TOKEN'),
            "project_id" => env('IRON_PROJECT_ID'),
        ]);

        $this->queue_name = env('IRON_QUEUE_NAME');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Solicitud::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $carro = Auto::where('usuario', $request->get('usuario'))->first();
            $estacionamientoHorario = EstacionamientoHorario::where('id_estacionamiento', $request->get('estacionamiento'))->first();

            $solicitud = new Solicitud();
            $solicitud->usuario = $request->get('usuario');
            $solicitud->placa = (!empty($carro)) ? $carro->placa : 'pendiente';
            $solicitud->estacionamiento = $request->get('estacionamiento');
            $solicitud->horario = $estacionamientoHorario->id;
            $solicitud->save();
            $status="ok";
            $data=$solicitud;

            $this->ironmq->postMessage($this->queue_name, "Solicitud Registrada Nro ". $solicitud->id ." del usuario: ". $request->get('usuario'));
        } catch (\Exception $e){}

        return response()->json([
            'status' => $status,
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Solicitud::find($id);
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
