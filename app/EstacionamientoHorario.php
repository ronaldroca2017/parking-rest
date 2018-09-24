<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstacionamientoHorario extends Model
{
    protected $table = 'estacionamiento_horario';
	protected $primarykey = 'id_estacionamiento_horario';

	//auditroia lo desactivamos poniendolo a false 
	public $timestamps=false;

	// Para que registre ponemos los campos a insertat
	protected $fillable =['id_estacionamiento, dia, fecha_calendario, hora_ingreso,hora_salida,tarifa,reservado'];
	
	// Para que no tome en cuanta algunos campos del modelo al registrar lo definimos asi por ejemplo:
	protected $guarded = []; 
}
 