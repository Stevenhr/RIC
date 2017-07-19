<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Idrd\Usuarios\Repo\PersonaInterface;
use Illuminate\Http\Request;
use App\Persona;

class MainController extends Controller {

	protected $Usuario;
	protected $repositorio_personas;

	public function __construct(PersonaInterface $repositorio_personas)
	{
		if (isset($_SESSION['Usuario']))
			$this->Usuario = $_SESSION['Usuario'];

		$this->repositorio_personas = $repositorio_personas;
	}

	public function welcome()
	{
		//$data['seccion'] = '';
		//return view('welcome', $data);

		 $vectorArreglaso="a%3A14%3A%7Bi%3A0%3Bs%3A4%3A%221046%22%3Bi%3A1%3Bs%3A1%3A%221%22%3Bi%3A2%3Bs%3A1%3A%221%22%3Bi%3A3%3Bs%3A1%3A%221%22%3Bi%3A4%3Bs%3A1%3A%221%22%3Bi%3A5%3Bs%3A1%3A%221%22%3Bi%3A6%3Bs%3A1%3A%221%22%3Bi%3A7%3Bs%3A1%3A%221%22%3Bi%3A8%3Bs%3A1%3A%221%22%3Bi%3A9%3Bs%3A1%3A%221%22%3Bi%3A10%3Bs%3A1%3A%221%22%3Bi%3A11%3Bs%3A1%3A%221%22%3Bi%3A12%3Bs%3A1%3A%221%22%3Bi%3A13%3Bs%3A1%3A%221%22%3B%7D";



		if ($vectorArreglaso) //$request->has('vector_modulo') ||
        {   

			$vector = urldecode($vectorArreglaso);
            $user_array = unserialize($vector);       
            $_SESSION['Usuario'] = $user_array;
            $persona = $this->repositorio_personas->obtener($_SESSION['Usuario'][0]);
            $_SESSION['Usuario']['Persona'] = $persona;
            $_SESSION['Nombre']=$persona["Primer_Apellido"]." ".$persona["Segundo_Apellido"]." ".$persona["Primer_Nombre"]." ".$persona["Segundo_Nombre"];
            $_SESSION['Id_Usuario']=$persona["Id_Persona"];

            //dd($_SESSION['Nombre']);

            $permissions_array = $user_array;
           
			$permisos = [
				'Configuracion_usuario' => intval($permissions_array[1]),
				'Registro_Informacion' => intval($permissions_array[2]),
				'Reporte_General' => intval($permissions_array[3]),
			];

			$_SESSION['Usuario']['Permisos'] = $permisos;
			
			return view('welcome');	

        } else {
         //echo"3454";
            if(!isset($_SESSION['Usuario']))
                $_SESSION['Usuario'] = '';
        }
        
        if ($_SESSION['Usuario'] == '')
            return redirect()->away('http://www.idrd.gov.co/SIM/Presentacion/');
	}

    public function index(Request $request)
	{
		$fake_permissions = ['5144', '1'];
		//$fake_permissions = null;

		if ($request->has('vector_modulo') || $fake_permissions)
		{	
			$vector = $request->has('vector_modulo') ? urldecode($request->input('vector_modulo')) : $fake_permissions;
			$user_array = is_array($vector) ? $vector : unserialize($vector);
			$permissions_array = $user_array;

			$permisos = [
				'permiso1' => array_key_exists(1, $permissions_array) ? intval($permissions_array[1]) : 0
			];

			$_SESSION['Usuario'] = $user_array;
            $persona = $this->repositorio_personas->obtener($_SESSION['Usuario'][0]);

			$_SESSION['Usuario']['Recreopersona'] = [];
			$_SESSION['Usuario']['Roles'] = [];
			$_SESSION['Usuario']['Persona'] = $persona;
			$_SESSION['Usuario']['Permisos'] = $permisos;
			$this->Usuario = $_SESSION['Usuario'];
		} 
		else 
		{
			if (!isset($_SESSION['Usuario']))
				$_SESSION['Usuario'] = '';
		}

		if ($_SESSION['Usuario'] == '')
			return redirect()->away('http://www.idrd.gov.co/SIM/Presentacion/');

		return redirect('/welcome');
	}

	public function logout()
	{
		$_SESSION['Usuario'] = '';
		Session::set('Usuario', ''); 

		return redirect()->to('/');
	}
}