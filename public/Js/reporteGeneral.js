$(function()
{
	var URL = $('#main_reporte').data('url');

  $('input[data-role1="datepicker"]').datepicker({
      dateFormat: 'yy-mm-dd',
      yearRange: "-100:+0",
      changeMonth: true,
      changeYear: true,
    });

  $('input[data-role="datepicker"]').datepicker({
      dateFormat: 'yy-mm-dd',
      yearRange: "-100:+0",
      changeMonth: true,
      changeYear: true,
  });


  $('#form_reporte_general').on('submit', function(e){
          
          $.post(
            URL+'/validar_form',
            $(this).serialize(),
            function(data){

            
              if(data.status == 'error')
                {
                    validad_error(data.errors);
                } 
              else 
                {
                  validad_error(data.errors);
                  $("#contenido_reporte2").html("<img src='public/Img/loading.gif'/>");
                  
                  // DataTable
                  $('#contenido_reporte2').html(data.tabla);
                  $('#Tabla_Reporte2 tfoot th').each( function () {
                      var title = $(this).text();
                      if(title!="Menu" && title!="N°"){
                        $(this).html( '<input type="text" placeholder="Buscar"/>' );
                      }
                  } );
               
                  
                  var t = $('#Tabla_Reporte2').DataTable( {responsive: true,
                      dom: 'Bfrtip',
                      buttons: [
                          'copy', 'csv', 'excel', 'pdf'],
                      pageLength: 5
                  });
               
                  t.columns().every( function () {
                      var that = this;
                      $( 'input', this.footer() ).on( 'keyup change', function () {
                          if ( that.search() !== this.value ) {
                              that
                                  .search( this.value )
                                  .draw();
                          }
                      } );
                  });
                  
                }
            },'json');
          
      e.preventDefault();
  });


  var validad_error = function(data)
    {
        $('#form_reporte_general .form-group').removeClass('has-error');
        var selector = '';
        for (var error in data){
            if (typeof data[error] !== 'function') {
                switch(error)
                {
                    
                    case 'fecha_inicial':
                    case 'fecha_final':
                        selector = 'input';
                    break;

                    case 'planDesarrollo':
                    selector = 'select';
                    break;
                
                }
                $('#form_reporte_general '+selector+'[name="'+error+'"]').closest('.form-group').addClass('has-error');
            }
        }
    }
    // Build the chart


});


