<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    //
    protected $table = 'registro_supercade';
	protected $primaryKey = 'id';
	protected $fillable = ['supercade','nombres','apellidos','cedula','tipo_documento','genero','mail','telefono','celular','localidad','estrato','motivo_consulta','otro','pregunta_1','pregunta_2','pregunta_3','observaciones'];
	protected $connection = ''; 
	public $timestamps = true;

}
