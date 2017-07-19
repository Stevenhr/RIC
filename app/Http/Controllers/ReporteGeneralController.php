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

class ReporteGeneralController extends Controller {


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

		return view('reporteGeneral', $data);
	}


	public function validar_form(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'fecha_inicial' =>'required',
                'fecha_final' =>'required',
            ]
        );

           if ($validator->fails())
           {
                return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
           }
           else
           {
                $encuestas = Encuesta::with('supercade')->whereBetween('created_at',array($request['fecha_inicial'], $request['fecha_final']))->get();

                $tabla="
                <table class='table table-min' id='Tabla_Reporte2'>
                    <thead>
                        <tr>
                            <th>Id</b></th>
                            <th>Supercade</th>
                            <th>Nombre</th> 
                            <th>Cedula</th> 
                            <th>Tipo documento</th>
                            <th>Genero</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Celular</th>
                            <th>Localidad</th>
                            <th>Estrato</th>
                            <th>Modalidad</th>
                            <th>Otro</th>
                            <th>Le fue clara la información suministrada?</th>
                            <th>Califique la atencion recibida?</th>
                            <th>Conoce la pagina web del IDRD ?</th>
                            <th>Observaciones o sugerencias</th>
                            <th>Fecha</th>
                            <th>Usuario</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</b></th>
                            <th>Supercade</th>
                            <th>Nombre</th> 
                            <th>Cedula</th> 
                            <th>Tipo documento</th>
                            <th>Genero</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Celular</th>
                            <th>Localidad</th>
                            <th>Estrato</th>
                            <th>Modalidad</th>
                            <th>Otro</th>
                            <th>Le fue clara la información suministrada?</th>
                            <th>Califique la atencion recibida?</th>
                            <th>Conoce la pagina web del IDRD ?</th>
                            <th>Observaciones o sugerencias</th>
                            <th>Fecha</th>
                            <th>Usuario</th>
                        </tr>
                    </tfoot>
                    <tbody>";
                    
                        foreach ($encuestas as $encuesta) 
                        {
                            $tabla=$tabla."<tr>
                                <td><h5>".$encuesta['id']."</h5></td>
                                <td ><div  class='campoArea'>".$encuesta->supercade['nombre']."</div></td>
                                <td> ".$encuesta['nombres']." ".$encuesta['apellidos']."</td>
                                <td>".$encuesta['cedula']."</td>
                                <td>".$encuesta->tipoDocumento['Nombre_TipoDocumento']."</td>
                                <td>".$encuesta['genero']."</td>
                                <td>".$encuesta['mail']."</td>
                                <td>".$encuesta['telefono']."</td>
                                <td>".$encuesta['celular']."</td>
                                <td>".$encuesta->localidad['Nombre_Localidad']."</td>
                                <td>".$encuesta['estrato']."</td>
                                <td>".$encuesta->motivo['motivo']."</td>
                                <td>".$encuesta['otro']."</td>
                                <td>".$encuesta['pregunta_1']."</td>
                                <td>".$encuesta['pregunta_2']."</td>
                                <td>".$encuesta['pregunta_3']."</td>
                                <td>".$encuesta['observaciones']."</td>
                                <td>".$encuesta['created_at']."</td>
                                <td>".$encuesta->persona["Primer_Apellido"]." ".$encuesta->persona["Segundo_Apellido"]." ".$encuesta->persona["Primer_Nombre"]." ".$encuesta->persona["Segundo_Nombre"]."</td>
                            </tr>";

                        }
                                                
                $tabla=$tabla."</tbody>
                </table>";
                return response()->json(array('status' => 'ok', 'tabla' => $tabla));
            }
    }


}

