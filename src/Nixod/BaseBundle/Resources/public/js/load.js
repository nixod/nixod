var Nixod = new Nixod('');

$(function(){
    $('#desktop').jqDesktop({iconWidth:70, iconHeight:70});
    for (var m in modules) {
        //console.log(m);
        //console.log(modules[m]);
        $('#desktop').append('<div id="window-'+m+'" class="nixod-window"/>');
        $.post(m, function(data){
            console.log(data.module);
            console.log(data);
           $('#window-'+data.module).html(data.html).trigger(data.module+'load', {desktop:$('#desktop'), window:$('#window-'+data.module)});
        });
        $('#desktop').jqDesktop('addWindow', $('#window-'+m).jqWindow(modules[m]));
    }
    //$('#desktop').jqDesktop('addWindow', $('#window-home').jqWindow({icon:'images/home.png', maximized:false, visible:true, height:500}));
});