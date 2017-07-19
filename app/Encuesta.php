<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    //
    protected $table = 'registro_supercade';
	protected $primaryKey = 'id';
	protected $fillable = ['id_supercade','nombres','apellidos','cedula','id_tipo_documento','genero','mail','telefono','celular','id_localidad','estrato','id_motivo_consulta','otro','pregunta_1','pregunta_2','pregunta_3','observaciones','id_usuario'];
	protected $connection = ''; 
	public $timestamps = true;

	public function supercade()
    {
        return $this->belongsTo('App\Supercade','id_supercade');
    }

    public function tipoDocumento()
    {
        return $this->belongsTo('App\TipoDocumento','id_tipo_documento');
    }

    public function localidad()
    {
        return $this->belongsTo('App\Localidad','id_localidad');
    }

    public function motivo()
    {
        return $this->belongsTo('App\Motivo','id_motivo_consulta');
    }

     public function persona()
    {
        return $this->belongsTo('App\Persona','id_usuario');
    }

}
