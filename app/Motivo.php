<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    //
    protected $table = 'motivo_consulta';
	protected $primaryKey = 'id_motivo';
	protected $fillable = ['motivo'];
	protected $connection = ''; 
	public $timestamps = true;

}
