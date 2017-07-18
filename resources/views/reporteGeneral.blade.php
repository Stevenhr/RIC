@extends('master')                              

@section('script')
	@parent
    <script src="{{ asset('public/Js/reporteGeneral.js') }}"></script>
@stop

@section('content') 
        
    <div class="content">
    	<div class="content" id="main_reporte" class="row" data-url="reportegeneral" ></div>
    	
    	<div class="row">
    	    <div class="col-xs-12 col-md-12">
				<h4>Reporte General</h4>
				<br><br>
    		</div>
    	</div>
    	<form id="form_reporte_general" method="post">
	    	<div class="row">
	    	    <div class="col-xs-12 col-md-2"></div>
	    		<div class="col-xs-12 col-md-4">
			    	<div class="form-group">	
					    <label for="proyecto">3. Fecha inicial</label>
					    <input class="form-control" type="date" name="fecha_inicial" id="fecha_inicial" data-role1="datepicker">
					</div>
	    		</div>
	    		<div class="col-xs-12 col-md-4">
			    	<div class="form-group">	
					    <label for="proyecto">4. Fecha final</label>
					    <input class="form-control" type="date" name="fecha_final" id="fecha_final" data-role="datepicker">
					</div>
	    		</div>
	    		<div class="col-xs-12 col-md-2"></div>
	    	</div>

	    	<div class="row">
	    	    <div class="col-xs-12 col-md-4">
			    	<div class="form-group">	
					</div>
	    		</div>
	    		<div class="col-xs-12 col-md-4">
			    	<div class="form-group center">	
					    <button type="submit" class="btn btn-primary">Generar Reporte</button>
					</div>
	    		</div>
	    		<div class="col-xs-12 col-md-4">
	    		</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-xs-12 col-md-12"></div>
	    		<div class="col-xs-12 col-md-12"><br><hr><br></div>
	    		<div class="col-xs-12 col-md-12"></div>
	    	</div>

	    	<div class="row">
	    	    <div class="col-xs-12 col-md-12">
	    			<div id="contenido_reporte2"></div>
	    		</div>
	    	</div>	

	    	<div class="row">
	    		<div class="col-xs-12 col-md-12"></div>
	    		<div class="col-xs-12 col-md-12"><br><hr><br></div>
	    		<div class="col-xs-12 col-md-12"></div>
	    	</div>

    	</form>

    </div>
            
       
@stop
