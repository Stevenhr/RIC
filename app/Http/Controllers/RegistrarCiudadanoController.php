<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Idrd\Usuarios\Repo\PersonaInterface;
use Illuminate\Http\Request;
use App\TipoDocumento;
use App\Localidad;
use App\Motivo;
use App\Encuesta;
use App\Supercade;
use Validator;

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


	public function crear(Request $request){


		$messages = [
		    'cades.required'    => 'El campo :attribute se encuentra vacio.',
		    'nombres.required'    => 'El campo :attribute se encuentra vacio.',
		    'apellidos.required' => 'El campo :attribute se encuentra vacio.',
		    'cedula.required'      => 'El campo :attribute se encuentra vacio.',
		    'tipo_documento.required'      => 'El campo :attribute se encuentra vacio.',
		    'genero.required'      => 'El campo :attribute se encuentra vacio.',
		    'mail.email'      => 'El formato del correo es incorrecto.',
		    'mail.required'      => 'El campo :attribute se encuentra vacio.',
		    'telefono.required'      => 'El campo :attribute se encuentra vacio.',
		    'celular.required'      => 'El campo :attribute se encuentra vacio.',
		    'localidad.required'      => 'El campo :attribute se encuentra vacio.',
		    'estrato.required'      => 'El campo :attribute se encuentra vacio.',
		    'motivo_consulta.required'      => 'El campo :attribute se encuentra vacio.',
		    'pregunta_1.required'      => 'El campo :attribute se encuentra vacio.',
		    'pregunta_2.required'      => 'El campo :attribute se encuentra vacio.',
		    'pregunta_3.required'      => 'El campo :attribute se encuentra vacio.',
		];

		$validator = Validator::make($request->all(),
		    [
				'cades' => 'required',
				'nombres' => 'required',
				'apellidos' => 'required',
				'cedula' => 'required',
				'tipo_documento' => 'required',
				'genero' => 'required',
				'mail' => 'required|email',
				'celular' => 'required',
				'localidad' => 'required',
				'estrato' => 'required',
				'motivo_consulta' => 'required',
				'pregunta_1' => 'required',
				'pregunta_2' => 'required',
				'pregunta_3' => 'required',
        	],$messages);
        

        if ($validator->fails())
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        
        if($request->input('id') == '0'){
                return $this->crear_ciudadano($request->all());
            }
            else{
                return $this->modificar_ciudadano($request->all());  
            }
    }


    public function crear_ciudadano($input)
    {
        $encuesta = new Encuesta;
        $encuesta['id_supercade']=$input['cades'];
		$encuesta['nombres']=$input['nombres'];
		$encuesta['apellidos']=$input['apellidos'];
		$encuesta['cedula']=$input['cedula'];
		$encuesta['id_tipo_documento']=$input['tipo_documento'];
		$encuesta['genero']=$input['genero'];
		$encuesta['mail']=$input['mail'];
		$encuesta['telefono']=$input['telefono'];
		$encuesta['celular']=$input['celular'];
		$encuesta['id_localidad']=$input['localidad'];
		$encuesta['estrato']=$input['estrato'];
		$encuesta['id_motivo_consulta']=$input['motivo_consulta'];
		$encuesta['otro']=$input['otro'];
		$encuesta['pregunta_1']=$input['pregunta_1'];
		$encuesta['pregunta_2']=$input['pregunta_2'];
		$encuesta['pregunta_3']=$input['pregunta_3'];
		$encuesta['observaciones']=$input['observaciones'];
		$encuesta['id_usuario']=$_SESSION['Id_Usuario'];
		$encuesta->save();

        return response()->json(array('status' => 'creado', 'datos' => $encuesta));
    }
    
    public function modificar_ciudadano($input)
    {
        $encuesta = Encuesta::find($input["id"]);
        $encuesta['id_supercade']=$input['cades'];
		$encuesta['nombres']=$input['nombres'];
		$encuesta['apellidos']=$input['apellidos'];
		$encuesta['cedula']=$input['cedula'];
		$encuesta['id_tipo_documento']=$input['tipo_documento'];
		$encuesta['genero']=$input['genero'];
		$encuesta['mail']=$input['mail'];
		$encuesta['telefono']=$input['telefono'];
		$encuesta['celular']=$input['celular'];
		$encuesta['id_localidad']=$input['localidad'];
		$encuesta['estrato']=$input['estrato'];
		$encuesta['id_motivo_consulta']=$input['motivo_consulta'];
		$encuesta['otro']=$input['otro'];
		$encuesta['pregunta_1']=$input['pregunta_1'];
		$encuesta['pregunta_2']=$input['pregunta_2'];
		$encuesta['pregunta_3']=$input['pregunta_3'];
		$encuesta['observaciones']=$input['observaciones'];
		$encuesta['id_usuario']=$_SESSION['Id_Usuario'];
		$encuesta->save();

        return response()->json(array('status' => 'modificado', 'datos' => $encuesta));
    }


}

