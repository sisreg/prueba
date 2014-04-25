$(document).ready(function() {
    $listado = $('ul[id$="_especialidadesMedico"]');
    $listado.hide();
    $capa_listado = $listado.parent().append('<div id="tree" style="width:50%;"></div>');
    $("#tree").dynatree({
        checkbox: true,
        selectMode: 2,
        initAjax: {
            url: Routing.generate('get_atenciones')
        },        
        onClick: function(node, event) {
            // We should not toggle, if target was "checkbox", because this
            // would result in double-toggle (i.e. no toggle)
            if (node.getEventTargetType(event) != 'expander')
                if (node.getEventTargetType(event) == "title"){
                    node.toggleSelect();
                    if (node.isSelected())
                        $(':checkbox[id$="_especialidadesMedico_'+node.data.key+'"]').attr('checked', true);
                    else
                        $(':checkbox[id$="_especialidadesMedico_'+node.data.key+'"]').attr('checked', false);
                }
                else{
                    if (node.isSelected())
                       $(':checkbox[id$="_especialidadesMedico_'+node.data.key+'"]').attr('checked', false);
                    else
                       $(':checkbox[id$="_especialidadesMedico_'+node.data.key+'"]').attr('checked', true);
                }
        },
        onPostInit: function(isReloading, isError) {
            $('ul[id$="_especialidadesMedico"] input:checked').each(function(i, nodo){
                $("#tree").dynatree("getTree").selectKey($(nodo).val());
            });
        },
    });    
    
});
