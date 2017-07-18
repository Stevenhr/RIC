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
                $encuestas = Encuesta::all();

                $tabla="  <div class='table-responsive'> 
                <table class='table' id='Tabla_Reporte2'>
                    <thead>
                        <tr>
                            <th>Id</b></th>
                            <th>Objeto</th>
                            <th>Valor</th> 
                            <th>Proyecto</th>
                            <th>Meta</th>
                            <th>Actividad</th>
                            <th>Concepto</th>
                            <th>Fuente</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</b></th>
                            <th>Objeto</th>
                            <th>Valor</th> 
                            <th>Proyecto</th>
                            <th>Meta</th>
                            <th>Actividad</th>
                            <th>Concepto</th>
                            <th>Fuente</th>
                        </tr>
                    </tfoot>
                    <tbody>";
                    
                        foreach ($encuestas as $key => $encuesta) 
                        {
                            $tabla=$tabla."<tr>
                                <td><h5>".$encuesta['id']."</h5></td>
                                <td ><div  class='campoArea'>".$encuesta['supercade']."</div></td>
                                <td> ".$encuesta['nombres']." ".$encuesta['apellidos']."</td>
                                <td>".$encuesta['tipo_documento']."</td>
                                <td>".$encuesta['genero']."</td>
                                <td>".$encuesta['mail']."</td>
                                <td>".$encuesta['telefono']."</td>
                                <td>".$encuesta['celular']."</td>
                            </tr>";
                        }
                                                
                $tabla=$tabla."</tbody>
                </table></div>";
                return response()->json(array('status' => 'ok', 'tabla' => $tabla));
            }
    }


}

