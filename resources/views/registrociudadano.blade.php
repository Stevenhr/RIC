@extends('master')

@section('script')
  @parent

    <script src="{{ asset('public/Js/registrociudadano.js') }}"></script> 
@stop

@section('content')

<div class="content" id="registroCiudadano" class="row" data-url="registroCiudadano"></div>

    <div class="panel panel-default">

        <div class="panel-body">
            <div class="freebirdFormviewerViewFormContent ">
                <div class="freebirdFormviewerViewHeaderHeader">
                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        <form method="POST" id="form_registro_ciudadano">

                            <!-- nuevo formulario-->


                            <div class="row">
                                <div class="col-sm-4" align="right" style="font-size: 15pt">
                                    <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">&nbsp;&nbsp;&nbsp;SUPERCADE:</label>
                                </div>
                                <div class="col-sm-8" style="font-size: 12pt">

                                    @foreach($supercades as $supercade)
                                      <label class="radio-inline">
                                          <input type="radio" class="option-input checkbox" name="cades" value="{{ $supercade['id'] }}">{{ $supercade['nombre'] }}
                                      </label>
                                    @endforeach
                                   
                                    
                                </div>
                            </div>
                            <br>

                            <div class="panel panel-default">
                                <div class="panel-heading"><font size="4" color="#1995dc">Información del ciudadano</font></div>
                                <div class="panel-body">
                                    <div class="row">


                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombres </label>
                                        </div>
                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Apellidos</label>
                                        </div>
                                        <div class="col-xs-6">
                                            <input required type="text" class="form-control" id="nombres" name="nombres" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="col-xs-6">
                                            <input  required type="text" class="form-control" id="apellidos" name="apellidos" onkeyup="javascript:this.value=this.value.toUpperCase();"><br>
                                        </div>


                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de Identidad </label>
                                        </div>
                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Tipo de documento </label>
                                        </div>
                                        <div class="col-xs-6">
                                            <input title="Se necesita una cedula" required type="number" class="form-control" id="cedula" name="cedula" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="col-xs-6">
                                            <select name="tipo_documento" id="tipo_documento" class="form-control" >
                                                <option value="">Seleccionar</option>
                                                @foreach($tipoDocumentos as $TipoDocumento)
                                                <option value="{{ $TipoDocumento['Id_TipoDocumento'] }}">{{ $TipoDocumento['Nombre_TipoDocumento'] }} - {{ $TipoDocumento['Descripcion_TipoDocumento'] }}</option>
                                                @endforeach
                                            </select><br>
                                        </div>


                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Género</label>
                                        </div>
                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Correo Electrónico</label>
                                        </div>
                                        <div class="col-xs-6">
                                            <select name="genero" id="genero" class="form-control" >
                                                <option value="">Seleccione</option>
                                                <option value="1">Masculino</option>
                                                <option value="2">Femenino</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">
                                            <input required type="mail" class="form-control" id="mail" name="mail" ><br>
                                        </div>


                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Teléfono fijo</label>
                                        </div>
                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Teléfono celular </label>
                                        </div>
                                        <div class="col-xs-6">
                                            <input required type="number" class="form-control" id="telefono" name="telefono" >
                                        </div>
                                        <div class="col-xs-6">
                                            <input required type="number" class="form-control" id="celular" name="celular" ><br>
                                        </div>


                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Localidad</label>
                                        </div>
                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Estrato </label>
                                        </div>
                                        <div class="col-xs-6">
                                            <select  required name="localidad" id="localidad" class="form-control" >
                                                <option value="">Seleccionar</option>
                                                @foreach($localidades as $localidad)
                                                <option value="{{ $localidad['Id_Localidad'] }}">{{ $localidad['Nombre_Localidad'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-xs-6">
                                            <select name="estrato" id="estrato" class="form-control" >
                                                <option value="">Seleccione</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select><br>
                                        </div>


                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Motivo de la consulta</label>
                                        </div>
                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Otro </label>
                                        </div>
                                        <div class="col-xs-6">
                                            <select name="motivo_consulta" id="motivo_consulta" class="form-control" >
                                                <option value="">Seleccionar</option>
                                                @foreach($motivos as $motivo)
                                                <option value="{{ $motivo['id_motivo'] }}">{{ $motivo['motivo'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-xs-6">
                                            <input required type="text" class="form-control" id="otro" name="otro" ><br>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><font size="4"color="#1995dc">Encuesta</font></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Le fue clara la información suministrada?</label></div>
                                        <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2"> Califique la atencion recibida?</label></div>


                                        <div class="col-xs-6"><select name="pregunta_1" id="pregunta_1" class="form-control" >
                                                <option value="">Seleccione</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select></div>
                                        <div class="col-xs-6"><select name="pregunta_2" id="pregunta_2" class="form-control" >
                                                <option value="">Seleccione</option>
                                                <option value="Excelente">Excelente</option>
                                                <option value="Bueno">Bueno</option>
                                                <option value="Regular">Regular</option>
                                                <option value="Malo">Malo</option>
                                            </select><br></div>

                                        <div class="col-xs-6">
                                            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Conoce la pagina web del IDRD ?</label></div>
                                        <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Observaciones o sugerencias</label></div>

                                        <div class="col-xs-6"><select name="pregunta_3" id="pregunta_3" class="form-control" >
                                                <option value="">Seleccione</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select></div>
                                        <div class="col-xs-6">
                                            <textarea id="observaciones" class="form-control" name="observaciones" rows="3"></textarea><br>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4"></div>
                                <div class="col-xs-4">
                                  <button type="button" class="btn btn-primary btn-md btn-block">Registrar</button>  
                                </div>
                                <div class="col-xs-4"></div>
                            </div>
                       </form>
                </div>
            </div>
        </div>







<script src="{{ asset('public/Js/moment.js') }}"></script>
<script src="{{ asset('public/Js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/Js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('public/Css/bootstrap.min.css') }}"></script>
<script src="{{ asset('public/Css/bootstrap-datetimepicker.min.css') }}"></script>
<script src="{{asset('public/Js/form.js')}}"></script>
<script language="javascript" type="text/javascript">

    //*** Este Codigo permite Validar que sea un campo Numerico
    
    //*** Fin del Codigo para Validar que sea un campo Numerico
</script>

@stop