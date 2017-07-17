<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Idrd\Usuarios\Repo\PersonaInterface;
use Illuminate\Http\Request;

class RegistrarCiudadanoController extends Controller {


	public function index()
	{
		$data['seccion'] = '';
		return view('registrociudadano', $data);
	}


}