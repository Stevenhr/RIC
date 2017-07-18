<!DOCTYPE html>



<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="csrf-token" content="{{ csrf_token() }}" />

      @section('style')
          <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="{{ asset('public/components/jquery-ui/themes/base/jquery-ui.css') }}" media="screen">    
          <link rel="stylesheet" href="{{ asset('public/Css/bootstrap.css') }}" media="screen">    
          <link rel="stylesheet" href="{{ asset('public/components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" media="screen">
          <link rel="stylesheet" href="{{ asset('public/components/datatables.net-bs/css/dataTables.bootstrap.css') }}" media="screen">
          <link rel="stylesheet" href="{{ asset('public/components/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" media="screen">
          <link rel="stylesheet" href="{{ asset('public/components/highcharts/css/highcharts.css') }}" media="screen">
          <link rel="stylesheet" href="{{ asset('public/components/loaders.css/loaders.min.css') }}" media="screen">
          <link rel="stylesheet" href="{{ asset('public/Css/main.css') }}" media="screen">    
      @show

      @section('script')
          <script src="{{ asset('public/components/jquery/jquery.js') }}"></script>
          <script src="{{ asset('public/components/jquery-ui/jquery-ui.js') }}"></script>
          <script src="{{ asset('public/components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('public/components/moment/moment.js') }}"></script>
          <script src="{{ asset('public/components/datatables.net/js/jquery.dataTables.js') }}"></script>
          <script src="{{ asset('public/components/datatables.net-bs/js/dataTables.bootstrap.js') }}"></script>
          <script src="{{ asset('public/components/datatables.net-responsive/js/dataTables.responsive.js') }}"></script>
          <script src="{{ asset('public/components/highcharts/js/highcharts.js') }}"></script>
          <script src="{{ asset('public/components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
          <script src="{{ asset('public/Js/main.js') }}"></script>
      @show

      <title>Aplicativo Registro Información - Supercades</title>
  </head>

  <body>
      
       <!-- Menu Módulo -->
       <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a href="#" class="navbar-brand">SIM</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Administración <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="themes">
            
                  <li class=”{{ Request::is( 'personas') ? 'active' : '' }}”>
                    <a href="{{ URL::to( 'personas') }}">Registro de Usuario</a>
                  </li>

                </ul>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Información<span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="download">
                 
                  <li class=”{{ Request::is( 'registrarciudadano') ? 'active' : '' }}”>
                    <a href="{{ URL::to( 'registrarciudadano') }}">Registro de Información</a>
                  </li>
                  
                </ul>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Reportes<span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="download">
                  
                  <li class=”{{ Request::is( 'reportegeneral') ? 'active' : '' }}”>
                    <a href="{{ URL::to( 'reportegeneral') }}">Reporte General</a>
                  </li>

                </ul>
              </li>
            </ul>

           

            <ul class="nav navbar-nav navbar-right">
              <li><a href="http://www.idrd.gov.co/sitio/idrd/" target="_blank">I.D.R.D</a></li>
              <li><a href="#" target="_blank">Cerrar Sesión</a></li>
            </ul>

          </div>
        </div>
      </div>
      <!-- FIN Menu Módulo -->
        
      <!-- Contenedor información módulo -->
      </br></br>
      <div class="container">
          <div class="page-header" id="banner">
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-6">
                <h2>APLICATIVO</h2>
                <p class="lead"><h2>Registro Información - Supercades</h2></p>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-6">
                 <div align="right"> 
                    <img src="public/Img/IDRD.JPG" width="50%" heigth="40%"/>
                 </div>                    
              </div>
            </div>
          </div>        
      </div>
      <!-- FIN Contenedor información módulo -->

      <!-- Contenedor panel principal -->
      <div class="container">
          @yield('content')
      </div>        
      <!-- FIN Contenedor panel principal -->
  </body>

</html>





