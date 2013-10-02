$(document).ready(function() {

    $('i').popover('show');
    //DESHABILITAR LAS ATENCIONES 
    $('select[id$="_idAtenAreaModEstab"]').attr('disabled', 'disabled');
    $('#por_sexo').attr('disabled', 'disabled');
    $('select[id$="_idServicioExternoEstablecimiento"]').attr('disabled', 'disabled');
    $('#numero_ambientes').attr('disabled', 'disabled');
    //CARGAR LAS MODALIDADES QUE TIENEN HOSPITALIZACIÓN PARA EL ESTABLECIMIENTO CONFIGURADO
    //SI NO POSEEN NINGUNA ENTONCES EL FORMULARIO ESTARÁ DESHABILITADO
    $.getJSON(Routing.generate('get_areas_modalidades'),
            function(data) {
                $.each(data.areas, function(indice, area) {
                    $('#areas-modalidad').append('<option value="' + area.id + '">' + area.nombre + '</option>');
                });
            });

    //CARGAS LAS ESPECIALIDADES Y SUBESPECIALIDADES DEL ÁREA DE HOSPITALIZACIÓN
    $('#areas-modalidad').change(function() {
        $('select[id$="_idAtenAreaModEstab"]').children().remove();
        $('select[id$="_idAtenAreaModEstab"]').append('<option value="">Seleccione...</option>');
        if ($('#areas-modalidad').val() == 0)
            $('select[id$="_idAtenAreaModEstab"]').attr('disabled', 'disabled');
        else {
            $('#por_sexo').attr('disabled', 'disabled');
            $('#numero_ambientes').attr('disabled', 'disabled');
            $('input[name="btn_generar"]').hide();
            $.getJSON(Routing.generate('get_especialidades') + '?idAreaModEstab=' + $('#areas-modalidad').val(),
                    function(data) {
                        $.each(data.especialidades, function(indice, especialidad) {
                            $('select[id$="_idAtenAreaModEstab"]').append('<option value="' + especialidad.id + '">' + especialidad.nombre + '</option>');
                        });
                        $('select[id$="_idAtenAreaModEstab"]').removeAttr('disabled');
                    });
        }
    });

    $('select[id$="_idAtenAreaModEstab"]').change(function() {
        $('#por_sexo').removeAttr('disabled');
        $('#numero_ambientes').removeAttr('disabled');
        $('input[name="btn_generar"]').show();

    });
    $('input[name="btn_guardar"]').hide();
    $('input[name="btn_guardar_otro"]').hide();

    $('#resultados').hide();
    $('input[name="btn_generar"]').hide().click(function() {
        $('#resultados').load(Routing.generate('generar_servicios_hospitalarios') + '?idAtenAreaModEstab=' + $('select[id$="_idAtenAreaModEstab"]').val() + "&porSexo=" + $('#por_sexo').is(':checked') + "&numeroAmbientes=" + $('#numero_ambientes').val());
        $('#resultados').show();
    })


});


