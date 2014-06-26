$(document).ready(function() {
    $("#fecha_inicio").datepicker().mask("99-99-9999");
    $("#fecha_fin").datepicker().mask("99-99-9999");

    $("#emitir_informe").click(function() {
       
        if ($("#fecha_inicio").val() == '' || $("#fecha_fin").val() == '') {
            ($('#error')) ? $('#error').remove() : '';
            var elem = $("<div id='error' title='Error de llenado'><center>" +
                    "Debe de seleccionar ambas fechas para generar el reporte."
                    + "</center></div>");
            elem.insertAfter($("#expedientes_creados"));
            $("#error").dialog({
                close: function() {
                    if ($("#fecha_inicio").val() == '')
                        $("#fecha_inicio").focus();
                    else
                        $("#fecha_fin").focus();
                }
            });
        } else if ($("#fecha_inicio").datepicker("getDate") > $("#fecha_fin").datepicker("getDate")) {
            ($('#error')) ? $('#error').remove() : '';
            var elem = $("<div id='error' title='Error de llenado'><center>" +
                    "La fecha de inicio debe de ser menor que la fecha fin."
                    + "</center></div>");
            elem.insertAfter($("#expedientes_creados"));
            $("#error").dialog({
                close: function() {
                    $("#fecha_inicio").val('');
                    $("#fecha_fin").val('');
                    $("#fecha_inicio").focus();
                }
            });
        } else {
            $('#resultado').load(Routing.generate('expedientes_creados'), {'datos': $('#expedientes_creados').serialize()});
        }
        return false;
    });


//para exportar reportes
    $('#exportar_hoja_calculo').click(function() {
        if ($('.ui-paging-info').text() != 'Sin registros que mostrar') {
            url = Routing.generate('_exportar_reporte') + '/expedientes_creados/xls?fecha_inicio=' + $('#fecha_inicio').val() + '&fecha_fin=' + $('#fecha_fin').val();
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }

    });
    $('#exportar_pdf').click(function() {
        if ($('.ui-paging-info').text() != 'Sin registros que mostrar') {
            url = Routing.generate('_exportar_reporte') + '/expedientes_creados/PDF?fecha_inicio=' + $('#fecha_inicio').val() + '&fecha_fin=' + $('#fecha_fin').val();
            window.open(url, '_blank');
            return false;
        }
        else {
            return false;
        }

    });
});

