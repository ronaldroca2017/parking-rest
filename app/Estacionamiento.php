<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estacionamiento extends Model
{
    protected $table = 'estacionamiento';
	protected $primarykey = 'id_estacionamiento';
 
	//auditroia lo desactivamos poniendolo a false
	public $timestamps=false;
 
	// Para que registre ponemos los campos a insertat
	protected $fillable =['id_tipo_propiedad, id_tipo_estacionamiento, nombre, direccion,latitud,longitud,estado, id_usuario'];
	
	// Para que no tome en cuanta algunos campos del modelo al registrar lo definimos asi por ejemplo:
	protected $guarded = [];
}
 