<div class="color  mt-3 mt-4 p-5">
  <h1>Mi Carrito</h1>
</div>



<br>
<br>
<br>
<!-- Todos los items de carrito en "$cart". -->
<div class="row">

  <div class="col-md-8 container-fluid">
    <div class="float-right">
      <em></em>
    </div>
    <div class="table-responsive">
      <table class="table border" cellpadding="5px" cellspacing="1px">
        <tr class="table-success" id="main_heading">
          <td>N*</td>
          <td>Nombre</td>
          <td>Precio</td>
          <td>Cantidad</td>
          <td>Total</td>
          <td>Eliminar</td>
        </tr>
        <!-- Crea un formulario y envia valores a carrito_controller/actualiza carrito -->
        <tr>
          <td> </td>
          <td> </td>
          <td> $ </td>
          <td> </td>
          <td>$</td>
          <td>
            <!-- Imagen -->
          </td>
        </tr>
      </table>
      <!-- fintabel -->
    </div>
    <!-- col-md-8 container-fluid -->

    <div class="container-fluid border text-right">
      <b>Total: $</b>
    </div>


  </div>
  <br>
  <div class="col-md-3">
    <div class="container-fluid text-center">
      <a type="button" class="btn btn-danger btn-sm" href="">Borrar Carrito</a>
      <!-- Submit boton. Actualiza los datos en el carrito
                            <a type="submit" class="btn btn-success" >Actualizar</a> -->
      <input type="submit" style="margin-right:0%;" class='btn btn-success btn-sm' value="Actualizar">
    </div>
  </div>
</div>
<br>
<div class="container-fluid text-center">
  <a type="button" class="btn btn-warning btn-sm" href="">Comprar +</a>
  <!-- Borrar carrito usa mensaje de confirmacion javascript implementado en partes/head_view -->

  <!-- " Confirmar orden envia a carrito_controller/muestra_compra  -->
  <a type="button" class="btn btn-success btn-sm" href="">Confirmar Orden</a>
</div>





<br>
<br>