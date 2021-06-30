<?php
namespace App\Controllers;

//llamo al modelo con el cual hare consultas via controlador a la bd
use App\Models\Excursiontresmodel;

class Excursion3Controller extends BaseController
{
    

    public function calcularExcursionTres(){





        //creamos el objeto de  excursion 1
        $objeto= new Excursiontresmodel;
        //verificamos si exite session y borramos todos los datos para solo tener la consulta actual
        $session_iniciada=session('id_session');
        if(isset($session_iniciada)){
         $objeto->eliminarDatosSession($session_iniciada);
        }

        

        $id_session=rand(0,5000);
        //creamos la sesion del calculo para posteriormente traer los datos y recorrerlos con la sesion creada
        $data = [
            'id_session'   => $id_session
        ];
        $session = session();
        $session->set($data);

        //Creo arreglo empaquetando por elemento con su peso y su caloria para insertarlo individual en la bd
        $datos1=array($id_session,
            $_POST['peso1'],
            $_POST['calorias1'],
            $_POST['elemento1']
            
            
        );


        
        $datos2=array($id_session,
         $_POST['peso2'],
         $_POST['calorias2'],
         $_POST['elemento2']
     );
        
        $datos3=array($id_session,
            $_POST['peso3'],
            $_POST['calorias3'],
            $_POST['elemento3']


        );

        $datos4=array($id_session,
           $_POST['peso4'],
           $_POST['calorias4'],
           $_POST['elemento4']


       );

        $datos5=array($id_session,
            $_POST['peso5'],
            $_POST['calorias5'],
            $_POST['elemento5']


        );



//ejecutamos las inserciones de los 5 elementos en la bd
        $objeto->insertarElementos($datos1);
        $objeto->insertarElementos($datos2);
        $objeto->insertarElementos($datos3);
        $objeto->insertarElementos($datos4);
        $objeto->insertarElementos($datos5);


//aca obtengo los elementos que va llevar el usuario en array de objeto para iniciar las sumas y determinar cuales puede llevar
$elementos_a_llevar= $objeto->totalElementos($id_session);
//creo una funcion que me entregara 3 indices aleatorios 
function posicionesAleatorias(){
    $numeros=array();
    $numero1=rand(0,4);
    array_push($numeros, $numero1);
    $nummero2=rand(0,4);
    array_push($numeros, $nummero2);
    $numero3=rand(0,4);
    array_push($numeros, $numero3);
   
    return $numeros;
}

//generamos una funcion que nos retorne los indices sin repetir para utilizarla en las sumas
function indicesNoRepetidos(){
//en el ciclo while se ejecutara hasta que no hallan repetidos y cambiara a false y saldra del ciclo
$repetidos=true;
//para que no me entrege repetidos hacemos condicionales para que ninguno sea igual
while ( $repetidos==true) {
    //indices contiene un array de 3 numeros aleatorios que me entrega la funcion
    $indices=posicionesAleatorias();
    if($indices[0]!=$indices[1] && $indices[0]!=$indices[2]){
        if($indices[1]!=$indices[0] && $indices[1]!=$indices[2]){ 
            if($indices[2]!=$indices[0] && $indices[2]!=$indices[1]){
              return $indices;
               $repetidos=false;   
           }

       }
 
    }
}
}




function elementosAllevar($elementos_a_llevar){
//hacemos un contador con 100 intentos ya que si ninguno funciona ingreso datos incorrectos
$contador=0;
//para que no me entrege repetidos hacemos condicionales para que ninguno sea igual
while ( $contador<100) {
    //indices contiene un array de 3 numeros aleatorios que me entrega la funcion y verificamos que sean diferentes
  $contador=$contador+1;
    $indices=indicesNoRepetidos();
    
        $elementos_finales=array($elementos_a_llevar[$indices[0]]->{'elemento'},
        $elementos_a_llevar[$indices[1]]->{'elemento'},
        $elementos_a_llevar[$indices[2]]->{'elemento'}
    );
       //obtenemos los pesos y calorias de las 3 posiciones aleatorias  el cual es el indice que obtuvimos en el condicional anterior, creamos un array con los 3 pesos para luego sumarlos
      $peso=array($elementos_a_llevar[$indices[0]]->{'peso'},
        $elementos_a_llevar[$indices[1]]->{'peso'},
        $elementos_a_llevar[$indices[2]]->{'peso'}
    ); 
      //creamos un array de calorias para sumalas
       $calorias=array($elementos_a_llevar[$indices[0]]->{'calorias'},
        $elementos_a_llevar[$indices[1]]->{'calorias'},
        $elementos_a_llevar[$indices[2]]->{'calorias'}

   );
//realizamos la suma de calorias y de pesos
$suma_peso=array_sum($peso);
$suma_calorias=array_sum($calorias);

if($suma_peso<=30 && $suma_calorias>=100){
//si todo esta bien retornamos los datos que pusimos en array y eso serian los datos finales y cambiamos datos_correctos a true para que ya finalice el ciclo
$llevar_elemento=$elementos_finales;
$llevar_caloria=$calorias;
$llevar_peso=$peso;

$respuesta="Los elementos que podras llevar son:"."<br>"."<ul><li>".$llevar_elemento[0]."</li><li>".$llevar_elemento[1]."</li><li>".$llevar_elemento[2]."</li><ul>"."Ya que su peso total seria ".$suma_peso." y brindan ".$suma_calorias." calorias";
return $respuesta;
}
      
    if($contador==99){
 return "Los elementos que llevas no cumplen con las condiciones";
    }

           }

    }
      
  // esta es la respuesta que le entregaremos al usuario lo que nos devuelve el return de la anterior funcion 
echo $dato=elementosAllevar($elementos_a_llevar);
        

    }



}
