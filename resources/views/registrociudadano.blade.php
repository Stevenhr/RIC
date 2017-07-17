@extends('master')                              

@section('content')         

<section id="page1">

    <div class="panel panel-default">

       

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">


<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">  

<style type="text/css">
	*{font-family: 'Roboto', sans-serif;}

.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 0px;
  right: 0;
  bottom: 0;
  left: 15px;
  height: 20px;
  width: 20px;
  /*transition: all 0.15s ease-out 0s;
  background: #cbd1d8;
  border: none;*/
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}
.option-input:hover {
  background: #9faab7;
}
.option-input:checked {
  background: #40e0d0;
}

.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}
.option-input.radio {
  border-radius: 100%;
}
.option-input.radio::after {
  border-radius: 100%;
}


</style>

<!-- nuevo formulario-->

 <div class="row">
  <div class="col-sm-4" align="right" style="font-size: 15pt"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">&nbsp;&nbsp;&nbsp;SUPERCADE:</label></div>
  <div class="col-sm-8" style="font-size: 12pt"> 
    <label class="radio-inline"><input type="radio" class="option-input checkbox" name="cades" id="cades">Américas</label>
    <label class="radio-inline"><input type="radio" class="option-input checkbox" name="cades" id="cades">Bosa</label>
    <label class="radio-inline"><input type="radio" class="option-input checkbox" name="cades" id="cades">20 de Julio</label>
    <label class="radio-inline"><input type="radio" class="option-input checkbox" name="cades" id="cades">Suba</label>
    <label class="radio-inline"><input type="radio" class="option-input checkbox" name="cades" id="cades">CAD</label>  
</div>
</div> 
<br>
<div class="panel panel-default">
  <div class="panel-heading"><font size="4"color="#1995dc">Información del ciudadano</font></div>
  <div class="panel-body">
    <div class="row">
  
     <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombres </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Apellidos</label></div>

       <div class="col-xs-6"><input required type="text" class="form-control" id="nombres" name="nombres" onkeyup="javascript:this.value=this.value.toUpperCase();"></div>
       <div class="col-xs-6"><input  required type="text" class="form-control" id="apellidos" name="apellidos" onkeyup="javascript:this.value=this.value.toUpperCase();"><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de Identidad </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Tipo de documento </label></div>

       <div class="col-xs-6"><input title="Se necesita una cedula" required type="number" class="form-control" id="cedula" name="cedula" onkeyup="javascript:this.value=this.value.toUpperCase();"></div>
       <div class="col-xs-6"><select name="tipo_documento" id="tipo_documento" class="form-control" >
				<option value="1">Cédula de Ciudadania</option>
				<option value="2">Cédula de Extranjeria</option>
			</select><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Género</label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Correo Electrónico</label></div>

       <div class="col-xs-6"><select name="genero" id="genero" class="form-control" >
          <option value="">Seleccione</option>
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
      </select></div>
       <div class="col-xs-6"><input required type="mail" class="form-control" id="mail" name="mail" ><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Teléfono fijo</label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Teléfono celular </label></div>

       <div class="col-xs-6"><input required type="number" class="form-control" id="telefono" name="telefono" ></div>
       <div class="col-xs-6"><input required type="number" class="form-control" id="celular" name="celular" ><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Localidad</label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Estato </label></div>

       <div class="col-xs-6"><select  required name="localidad" id="localidad" class="form-control" >


            </select></div>
       <div class="col-xs-6"><select name="estrato" id="estrato" class="form-control" >
                <option value="">Seleccione</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
                <option value="6">6</option>
			</select><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Motivo de la consulta</label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Otro </label></div>

       <div class="col-xs-6"><select name="motivo_consulta" id="motivo_consulta" class="form-control" >
				
			</select></div>
       <div class="col-xs-6"><input required type="text" class="form-control" id="otro" name="otro" ><br></div>

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
          <textarea id="observaciones" name="observaciones" rows="3" cols="88"></textarea><br></div>

       
  </div>
</div>


         <div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">Entiendo y acepto los terminos y condiciones del curso de natación.</div></div></div><div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class=""><div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto"><div class="freebirdFormviewerViewItemsCheckboxChoice"><label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer"><div class="exportLabelWrapper"><input type="checkbox" required style="float: left;


          margin: 0px;" name="acepto" id="acepto"><div class="docssharedWizToggleLabeledContent"><div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div></div></div></label></div><input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden"></div></div><div id="i.req.131124881" class="screenreaderOnly"></div><div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div></div></div><div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681"><div class="freebirdFormviewerViewNavigationButtonsAndProgress"><div class="freebirdFormviewerViewNavigationButtons">



        <input class="enviar" type="submit" value="Enviar datos de inscripción" href="registro"> 



           <!--</div><div class="freebirdFormviewerViewNavigationProgress"><div class="freebirdFormviewerViewNavigationProgressIndicator" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-labelledby="lpd4pf" role="progressbar"><div class="freebirdFormviewerViewNavigationProgressIndicatorFill done" style="width:100%"></div></div><div id="lpd4pf" class="quantumWizButtonPaperbuttonContent" aria-hidden="true">Página 1 de 1</div></div></div><div class="freebirdFormviewerViewNavigationPasswordWarning">.</div></div> --> 


                            </font>
   
  <script type="text/javascript">
          
        </script>

   
   <script src="{{ asset('public/Js/moment.js') }}"></script>
   <script src="{{ asset('public/Js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('public/Js/bootstrap-datetimepicker.min.js') }}"></script>
   <script src="{{ asset('public/Css/bootstrap.min.css') }}"></script>
   <script src="{{ asset('public/Css/bootstrap-datetimepicker.min.css') }}"></script>



            </form>

           
</div>

                </div>

            </div>

        </div>

       </section>

       <script src="{{asset('public/Js/form.js')}}"></script>
<script language="javascript" type="text/javascript">

    //*** Este Codigo permite Validar que sea un campo Numerico
    function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }
    //*** Fin del Codigo para Validar que sea un campo Numerico
    </script>

@stop