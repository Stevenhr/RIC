<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supercade extends Model
{
    //
    protected $table = 'supercade';
	protected $primaryKey = 'id';
	protected $fillable = ['nombre'];
	protected $connection = ''; 
	public $timestamps = true;

}
