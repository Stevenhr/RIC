$(function()
{
	var URL = $('#registrarciudadano').data('url');

    $('#form_registro_ciudadano').on('submit', function(e){
				$.post(
                    URL+'/registro',
                    $(this).serialize(),
                    function(data){

                    	    if(data.status == 'error')
							{
								validador(data.errors);
								var listaError='';
								var num=1;
								$.each(data.errors, function(i, e){
					              listaError += '<li class="list-group-item text-danger">'+num+'. '+e+'</li>';
					              num++;
					            });
								$('#list_error').html(listaError);
								$('#myModal_mal').modal('show');
								
							} 
							else 
							{
								validador(data.errors);
								$('#nombre').html(data.datos.nombres+' '+data.datos.apellidos);
								$('#myModal_bien').modal('show');
								 setTimeout(function(){
				                      location.reload();
				                  },1000)
								
							}

                    }
                );
        e.preventDefault();
	});

	var validador = function(data)
	{

		$('#form_registro_ciudadano .form-group').removeClass('has-error');
		var selector = '';
		for (var error in data){
		    if (typeof data[error] !== 'function') {
		        switch(error)
		        {

		        	case 'nombres':
		        	case 'apellidos':
		        	case 'mail':
		        	case 'telefono':
		        	case 'celular':
		        	case 'celular':
		        		selector = 'input';
		        	break;

		        	case 'cades':
		        	case 'tipo_documento':
		        	case 'genero':
		        	case 'localidad':
		        	case 'estrato':
		        	case 'motivo_consulta':
		        	case 'pregunta_1':
		        	case 'pregunta_2':
		        	case 'pregunta_3':
		        		selector = 'select';
		        	break;


		        	case 'cades':
		        		selector = 'radio';
		        	break;
		        }
		        $('#form_registro_ciudadano '+selector+'[name="'+error+'"]').closest('.form-group').addClass('has-error');
		    }
		}
	}

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