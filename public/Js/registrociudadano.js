$(function()
{
	var URL = $('#registroCiudadano').data('url');

    $('#form_registro_ciudadano').on('submit', function(e){
			$("#contenido_reporte").html("<img src='public/Img/loading.gif'/>");
				$.post(
                    URL+'/reporteDatosActividad',
                    $(this).serialize(),
                    function(data){
                        $('#contenido_reporte2').html(data);
                        $('#Tabla_Reporte2').DataTable({
					        dom: 'Bfrtip',
					        buttons: [
					            'copyHtml5',
					            'excelHtml5',
					            'csvHtml5',
					            'pdfHtml5'
					        ]
					    });
                    }
                );
        e.preventDefault();
	});

	function Solo_Numerico(variable)
	{
    	Numer=parseInt(variable);
        if (isNaN(Numer))
        {
            return "";
        }
        return Numer;
    }
    function ValNumero(Control)
    {
        Control.value=Solo_Numerico(Control.value);
    }

});