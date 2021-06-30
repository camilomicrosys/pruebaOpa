<?php
//lamamos el helper de iconos
$datos = iconos();
//aca sacamos los iconos ya que la funcion del helper lo puse a retornar un array con los iconos de fontawsome
$iconoEnblanco       = $datos[0];
$iconoEditar         = $datos[1];
$iconoAtras          = $datos[2];
$iconoGuardar        = $datos[3];
$iconoCerrar         = $datos[4];
$iconoEliminar       = $datos[5];
$iconoListar         = $datos[6];
$iconoAgregarPersona = $datos[7];
$iconoAgregar        = $datos[8];
$iconoCrearModal     = $datos[9];
$iconoGestionar      = $datos[10];
$iconoDesblokear     = $datos[11];
$iconoLiquidar       = $datos[12];
$iconoResetear       = $datos[13];
$iconoReportes       = $datos[14];
//rutas de las imagenes
$rio_verde=  base_url() . '/public/imagenes/rio.jpg';
$guatape= base_url() . '/public//imagenes/guatape.jpg';
$monte_everest= base_url() . '/public//imagenes/everest.jpg';
?>
<?php $this->extend('footer_header/layoutContenido.php') ?>
<?php $this->section('contenido') ?>


<div class="card">
  <div style="text-align: center;" class="card-header">
    Siste Excursiones 
</div>
<div class="card-body">
    <div class="container">
      <div class="row g-2">
        <div class="col-4">
          <div class="p-3 border bg-light">Excursion rio verde </div>
      </div>
      <div class="col-4">
          <div class="p-3 border bg-light">Excursion Guatape-piedra Peñol</div>
      </div>
      <div class="col-4">
          <div class="p-3 border bg-light">Excursion monte Everest</div>
      </div>
      <div class="col-4">
          <div class="p-3 border bg-light"><img src="<?php echo $rio_verde; ?>" alt=""></div>
      </div>
      <div class="col-4">
          <div class="p-3 border bg-light"><img src="<?php echo $guatape; ?>" alt=""></div>
      </div>
      <div class="col-4">
          <div class="p-3 border bg-light"><img src="<?php echo $monte_everest; ?>" alt=""></div>
      </div>
      <div class="col-4">
          <div class="p-3 border bg-light"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#requisitos1">
              requisitos
          </button><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#calculo1">
              Calcular    
          </button></div>
      </div>
      <div class="col-4">
          <div class="p-3 border bg-light"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#requisitos2">
              requisitos
          </button><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#calculo2">
              Calcular    
          </button></div>
      </div>
      <div class="col-4">
          <div class="p-3 border bg-light"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#requisitos3">
              requisitos
          </button><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#calculo3">Calcular</button></div>
      </div>


  </div>
</div>

</div>

</div>
</div>




<!-- En esta parte activamos los modales de los requisitos-->
<!-- Modal requisitos 1 -->
<div class="modal fade" id="requisitos1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Requisitos excursion rio verde</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <p>Unicamente podras llevar elementos con un minimo de calorias y un maximo de peso,como se detalla a continuacion:</p><br>
        <ul>
            <li>Minimo de calorias:20 kcal</li>
            <li>Maximo de peso:15 Kg</li>
        </ul>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Aceptar</button>

    </div>
</div>
</div>
</div>

<!-- Modal requisitos 2 -->
<div class="modal fade" id="requisitos2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Requisitos excursion Guatape-piedra peñol</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <p>Unicamente podras llevar elementos con un minimo de calorias y un maximo de peso,como se detalla a continuacion:</p><br>
        <ul>
            <li>Minimo de calorias:40 kcal</li>
            <li>Maximo de peso:20 Kg</li>
        </ul>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Aceptar</button>

    </div>
</div>
</div>
</div>


<!-- Modal requisitos 3 -->
<div class="modal fade" id="requisitos3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Requisitos monte Everest</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <p>Unicamente podras llevar elementos con un minimo de calorias y un maximo de peso,como se detalla a continuacion:</p><br>
        <ul>
            <li>Minimo de calorias:100 kcal</li>
            <li>Maximo de peso:30 Kg</li>
        </ul>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Aceptar</button>

    </div>
</div>
</div>
</div>




<!-- en esta parte activamos los modales de los calculos -->


<!-- Modal claculo 1-->
<div class="modal fade" id="calculo1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calculo Elementos rio verde</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body ">
     <form id="form-rio-verde" action="<?php echo base_url().route_to('calcularExcursionUno');?>" method="POST">


             <div class="row">
                 <div class="col-3">
                    <strong>Elemento 1</strong><br>
                    <input required="" id="elemento1" name="elemento1" type="text" placeholder="Nombre1">
                </div>
                <div class="col-3">
                    <strong>Peso 1</strong><br>
                    <input required=""  id="peso1" name="peso1" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 1</strong><br>
                    <input required=""  id="calorias1" name="calorias1" type="number" >
             </div>
         </div>

          <div class="row">
                 <div class="col-3">
                    <strong>Elemento 2</strong><br>
                    <input required=""  id="elemento2" name="elemento2" type="text" placeholder="Nombre2">
                </div>
                <div class="col-3">
                    <strong>Peso 2</strong><br>
                    <input id="peso2" name="peso2" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 2</strong><br>
                    <input required=""  id="calorias2" name="calorias2" type="number" >
             </div>
         </div>
         <div class="row">
                 <div class="col-3">
                    <strong>Elemento 3</strong><br>
                    <input required=""  id="elemento3" name="elemento3" type="text" placeholder="Nombre3">
                </div>
                <div class="col-3">
                    <strong>Peso 3</strong><br>
                    <input required=""  id="peso3" name="peso3" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 3</strong><br>
                    <input required=""  id="calorias3" name="calorias3" type="number" >
             </div>
         </div>
     
       <div class="row">
                 <div class="col-3">
                    <strong>Elemento 4</strong><br>
                    <input required=""  id="elemento4" name="elemento4" type="text" placeholder="Nombre4">
                </div>
                <div class="col-3">
                    <strong>Peso 4</strong><br>
                    <input required=""  id="peso4" name="peso4" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 4</strong><br>
                    <input required=""  id="calorias4" name="calorias4" type="number" >
             </div>
         </div>
            <div class="row">
                 <div class="col-3">
                    <strong>Elemento 5</strong><br>
                    <input required=""  id="elemento5" name="elemento5" type="text" placeholder="Nombre5">
                </div>
                <div class="col-3">
                    <strong>Peso 5</strong><br>
                    <input required=""  id="peso5" name="peso5" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 5</strong><br>
                    <input required=""  id="calorias5" name="calorias5" type="number" >
             </div>
         </div>
         <button name="calcular-rio" type="sumbmit" class="btn btn-success" data-bs-dismiss="modal">calcular</button>
 </form>
</div>
<div class="modal-footer">
    
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#instruccionesDeUso">
              Instrucciones
          </button> <button id="limpiar" class="btn btn-warning">Limpiar</button>

</div>
</div>
</div>
</div>



<!-- Modal claculo 2-->
<div class="modal fade" id="calculo2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calculo elementos Guatape</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body ">
     <form id="form-rio-guatape" action="<?php echo base_url().route_to('calcularExcursionDos');?>" method="POST">


             <div class="row">
                 <div class="col-3">
                    <strong>Elemento 1</strong><br>
                    <input required=""  id="elemento12" name="elemento1" type="text" placeholder="Nombre1">
                </div>
                <div class="col-3">
                    <strong>Peso 1</strong><br>
                    <input required=""  id="peso12" name="peso1" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 1</strong><br>
                    <input required=""  id="calorias12" name="calorias1" type="number" >
             </div>
         </div>

          <div class="row">
                 <div class="col-3">
                    <strong>Elemento 2</strong><br>
                    <input required=""  id="elemento22" name="elemento2" type="text" placeholder="Nombre2">
                </div>
                <div class="col-3">
                    <strong>Peso 2</strong><br>
                    <input required=""  id="peso22" name="peso2" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 2</strong><br>
                    <input required=""  id="calorias22" name="calorias2" type="number" >
             </div>
         </div>
         <div class="row">
                 <div class="col-3">
                    <strong>Elemento 3</strong><br>
                    <input required=""  id="elemento32" name="elemento3" type="text" placeholder="Nombre3">
                </div>
                <div class="col-3">
                    <strong>Peso 3</strong><br>
                    <input required=""  id="peso32" name="peso3" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 3</strong><br>
                    <input required=""  id="calorias32" name="calorias3" type="number" >
             </div>
         </div>
     
       <div class="row">
                 <div class="col-3">
                    <strong>Elemento 4</strong><br>
                    <input required=""  id="elemento42" name="elemento4" type="text" placeholder="Nombre4">
                </div>
                <div class="col-3">
                    <strong>Peso 4</strong><br>
                    <input required=""  id="peso42" name="peso4" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 4</strong><br>
                    <input required=""  id="calorias42" name="calorias4" type="number" >
             </div>
         </div>
            <div class="row">
                 <div class="col-3">
                    <strong>Elemento 5</strong><br>
                    <input required="" id="elemento52" name="elemento5" type="text" placeholder="Nombre5">
                </div>
                <div class="col-3">
                    <strong>Peso 5</strong><br>
                    <input required=""  id="peso52" name="peso5" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 5</strong><br>
                    <input required=""  id="calorias52" name="calorias5" type="number" >
             </div>
         </div>
         <button name="calcular-guatape" type="sumbmit" class="btn btn-success" data-bs-dismiss="modal">calcular</button>
 </form>
</div>
<div class="modal-footer">
    
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#instruccionesDeUso">
              Instrucciones
          </button> <button id="limpiar-guatape" class="btn btn-warning">Limpiar</button>

</div>
</div>
</div>
</div>



<!-- Modal claculo 3-->
<div class="modal fade" id="calculo3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calculo elementos Monte Everest</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body ">
     <form id="form-rio-everest" action="<?php echo base_url().route_to('calcularExcursionTres');?>" method="POST">


             <div class="row">
                 <div class="col-3">
                    <strong>Elemento 1</strong><br>
                    <input required=""  id="elemento13" name="elemento1" type="text" placeholder="Nombre1">
                </div>
                <div class="col-3">
                    <strong>Peso 1</strong><br>
                    <input required=""  id="peso13" name="peso1" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 1</strong><br>
                    <input required=""  id="calorias13" name="calorias1" type="number" >
             </div>
         </div>

          <div class="row">
                 <div class="col-3">
                    <strong>Elemento 2</strong><br>
                    <input required=""  id="elemento23" name="elemento2" type="text" placeholder="Nombre2">
                </div>
                <div class="col-3">
                    <strong>Peso 2</strong><br>
                    <input required=""  id="peso23" name="peso2" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 2</strong><br>
                    <input required=""  id="calorias23" name="calorias2" type="number" >
             </div>
         </div>
         <div class="row">
                 <div class="col-3">
                    <strong>Elemento 3</strong><br>
                    <input required=""  id="elemento33" name="elemento3" type="text" placeholder="Nombre3">
                </div>
                <div class="col-3">
                    <strong>Peso 3</strong><br>
                    <input required=""  id="peso33" name="peso3" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 3</strong><br>
                    <input required=""  id="calorias33" name="calorias3" type="number" >
             </div>
         </div>
     
       <div class="row">
                 <div class="col-3">
                    <strong>Elemento 4</strong><br>
                    <input required=""  id="elemento43" name="elemento4" type="text" placeholder="Nombre4">
                </div>
                <div class="col-3">
                    <strong>Peso 4</strong><br>
                    <input required=""  id="peso43" name="peso4" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 4</strong><br>
                    <input required=""  id="calorias43" name="calorias4" type="number" >
             </div>
         </div>
            <div class="row">
                 <div class="col-3">
                    <strong>Elemento 5</strong><br>
                    <input required="" id="elemento53" name="elemento5" type="text" placeholder="Nombre5">
                </div>
                <div class="col-3">
                    <strong>Peso 5</strong><br>
                    <input required=""  id="peso53" name="peso5" type="number" >
             </div>
             <div class="col-3">
                 <strong>Calorias 5</strong><br>
                    <input required=""  id="calorias53" name="calorias5" type="number" >
             </div>
         </div>
         <button name="calcular-everest" type="sumbmit" class="btn btn-success" data-bs-dismiss="modal">calcular</button>
 </form>
</div>
<div class="modal-footer">
    
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#instruccionesDeUso">
              Instrucciones
          </button> <button id="limpiar-everest" class="btn btn-warning">Limpiar</button>

</div>
</div>
</div>
</div>






<!-- En esta parte activamos las instrucciones una sola instruccion ya que todos los formularios son los mismos asi que el id apuntara a este modal-->
<!-- Modal instrucciones -->
<div class="modal fade" id="instruccionesDeUso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Instrucciones de uso del Calulador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <p>Podras llevar a cabo un calculo siguiento las sigientes instrucciones:</p><br>
        <ul>
            <li>elemento1: agua</li>
            <li>peso1: 15 kg</li>
            <li>calorias1: 12 kcal</li>
        </ul>
        <br>
        <p>Donde elemento1 es el nombre del primer elemento que se desea llevar.</p><br>
        <p>Donde Peso1 es el peso real del primer elemento que deseamos llevar</p><br>
        <p>Donde Calorias1 es el valor de calorias que contiene el primer elemento que desea llevar</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Aceptar</button>

    </div>
</div>
</div>
</div>
<br>
<br>
<br>
<div >
 <div class="alert alert-primary" role="alert">
<div id="respuesta-servidor">
    
</div>
</div>
    
</div>

<?php $this->endSection() ?>