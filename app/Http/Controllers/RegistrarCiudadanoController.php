<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Idrd\Usuarios\Repo\PersonaInterface;
use Illuminate\Http\Request;
use App\TipoDocumento;
use App\Localidad;
use App\Motivo;
use App\Supercade;

class RegistrarCiudadanoController extends Controller {


	public function index()
	{
		$Localidad=Localidad::all();
		$TipoDocumento=TipoDocumento::all();
		$Motivo=Motivo::all();
		$Supercades=Supercade::all();

		$data=[
			'localidades'=>$Localidad,
			'tipoDocumentos'=>$TipoDocumento,
			'supercades'=>$Supercades,
			'motivos'=>$Motivo,
		];

		return view('registrociudadano', $data);
	}


}