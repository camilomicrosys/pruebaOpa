//esta sera la base url para trabajar via jquery ajax
var base_url='http://localhost/prueba1/';

/*----------------------
.     Modulo Jquery   Jquery    ajax        -
--------------------------
*/
$(document).ready(function(){

/*-----------------
-INICIO RIO VERDE-
------------------
*/



//reseteamos los campos del formulario y borramos el hrml de la respuesta del servidor
$("#limpiar").on("click",function(e){
e.preventDefault();

$("#elemento1").val("");
$("#elemento2").val("");
$("#elemento3").val("");
$("#elemento4").val("");
$("#elemento5").val("");

$("#calorias1").val("");
$("#calorias2").val("");
$("#calorias3").val("");
$("#calorias4").val("");
$("#calorias5").val("");

$("#peso1").val("");
$("#peso2").val("");
$("#peso3").val("");
$("#peso4").val("");
$("#peso5").val("");
//Al resetear pongo en blanco el campo del servidor
 $("#respuesta-servidor").html("");
});


$("[name='calcular-rio'").on("click",function(e){
e.preventDefault();
        let ruta=base_url+"calcular-excursion-1";
        let datos= $('#form-rio-verde').serialize();
        
        $.ajax({

            type:"POST",
            url:ruta,
            data:datos,
            success:function(respuestaServidor){
                //si no cumple lo pintamos de rojo
                if(respuestaServidor=="Los elementos que llevas no cumplen con las condiciones"){
                   let respuesta="<strong style='color:red;'>"+respuestaServidor+"</strong>";
                   $("#respuesta-servidor").html(respuesta);
                }else{

                     $("#respuesta-servidor").html(respuestaServidor);
                }
               
       

}

});

 

  
})


/*-----------------
-INICIO GUATAPE-
------------------
*/
//limpiar los datos de guatape


$("#limpiar-guatape").on('click',function(e){
e.preventDefault();


$("#elemento12").val("");
$("#elemento22").val("");
$("#elemento32").val("");
$("#elemento42").val("");
$("#elemento52").val("");

$("#calorias12").val("");
$("#calorias22").val("");
$("#calorias32").val("");
$("#calorias42").val("");
$("#calorias52").val("");

$("#peso12").val("");
$("#peso22").val("");
$("#peso32").val("");
$("#peso42").val("");
$("#peso52").val("");
//Al resetear pongo en blanco el campo del servidor
 $("#respuesta-servidor").html("");

});



$("[name='calcular-guatape'").on("click",function(e){
e.preventDefault();
        let ruta=base_url+"calcular-excursion-2";
        let datos= $('#form-rio-guatape').serialize();
        
        $.ajax({

            type:"POST",
            url:ruta,
            data:datos,
            success:function(respuestaServidor){
                //si no cumple lo pintamos de rojo
                if(respuestaServidor=="Los elementos que llevas no cumplen con las condiciones"){
                   let respuesta="<strong style='color:red;'>"+respuestaServidor+"</strong>";
                   $("#respuesta-servidor").html(respuesta);
                }else{

                     $("#respuesta-servidor").html(respuestaServidor);
                }
               
       

}

});

});

/*-----------------
-INICIO everest-
------------------
*/
//limpiar los datos de everest

$("#limpiar-everest").on('click',function(e){
e.preventDefault();


$("#elemento13").val("");
$("#elemento23").val("");
$("#elemento33").val("");
$("#elemento43").val("");
$("#elemento53").val("");

$("#calorias13").val("");
$("#calorias23").val("");
$("#calorias33").val("");
$("#calorias43").val("");
$("#calorias53").val("");

$("#peso13").val("");
$("#peso23").val("");
$("#peso33").val("");
$("#peso43").val("");
$("#peso53").val("");
//Al resetear pongo en blanco el campo del servidor
 $("#respuesta-servidor").html("");

});



$("[name='calcular-everest'").on("click",function(e){
e.preventDefault();
        let ruta=base_url+"calcular-excursion-3";
        let datos= $('#form-rio-everest').serialize();
        
        $.ajax({

            type:"POST",
            url:ruta,
            data:datos,
            success:function(respuestaServidor){
                //si no cumple lo pintamos de rojo
                if(respuestaServidor=="Los elementos que llevas no cumplen con las condiciones"){
                   let respuesta="<strong style='color:red;'>"+respuestaServidor+"</strong>";
                   $("#respuesta-servidor").html(respuesta);
                }else{

                     $("#respuesta-servidor").html(respuestaServidor);
                }
               
       

}

});

});

});


