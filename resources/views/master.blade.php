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
          <link rel="shortcut icon" href="{{ asset('public/Img/Institucionales/iconoModulo.png') }}">  
          <link rel="stylesheet" href="{{ asset('public/components/datatables.net-buttons-dt/css/buttons.dataTables.min.css') }}" media="screen">
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
          <script src="{{ asset('public/components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
          <script src="{{ asset('public/components/highcharts/js/highcharts.js') }}"></script>
          <script src="{{ asset('public/components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
          <script src="{{ asset('public/components/js_datatable/dataTables.buttons.min.js') }}"></script>
          <script src="{{ asset('public/Js/main.js') }}"></script>
          <script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
          <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
          <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
          <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>


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
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Información<span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="download">
                  @if($_SESSION['Usuario']['Permisos']['Registro_Informacion'])
                  <li class=”{{ Request::is( 'registrarciudadano') ? 'active' : '' }}”>
                    <a href="{{ URL::to( 'registrarciudadano') }}">Registro de Información</a>
                  </li>
                  @endif
                </ul>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Reportes<span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="download">
                  @if($_SESSION['Usuario']['Permisos']['Reporte_General'])
                  <li class=”{{ Request::is( 'reportegeneral') ? 'active' : '' }}”>
                    <a href="{{ URL::to( 'reportegeneral') }}">Reporte General</a>
                  </li>
                  @endif
                </ul>
              </li>
            </ul>

           

            <ul class="nav navbar-nav navbar-right">
              <li><a href="http://www.idrd.gov.co/sitio/idrd/" target="_blank">I.D.R.D</a></li>
              <li class=”{{ Request::is( 'logout') ? 'active' : '' }}”><a href="{{ URL::to( 'logout') }}">Cerrar Sesión</a></li>
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
            <div class="row">
                <div class="col-xs-6 col-md-6"></div>
                <div class="col-xs-6 col-md-6 " align="right">
                  <div class="alert" role="alert">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  <span >USUARIO:</span>
                  <b>{{$_SESSION['Nombre']}}</b>
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





