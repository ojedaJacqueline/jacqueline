<br>
<h1>Lista de Productos</h1>

<div class="container mt-5">
  <div class="row justify-content-center">
<!------------ div que contiene al boton y a la lista de prod-------------->    
    <div class="col-md-7">
<!------------ BOTON VISTA PRODUCTOS INACTIVOS-------------->  
      <div class="d-grid">
      <a class="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" href="<?php echo base_url('prodInactivos'); ?>">Ver Productos Inactivos</a>
      </div>
      <br>
<!------------//FIN// BOTON VISTA PRODUCTOS INACTIVOS-------------->
<!------------ LISTA DE PRODUCTOS-------------->
      <div class="card">
        <div class="card-header"style="color:darkgreen;">
          PRODUCTOS ACTIVOS
        </div>
        <div class="table-responsive">
          <table class="table d-flex ">
            <tr class="table-success">
              <th>Id</th>
              <th>Categoria</th>
              <th>Imagen</th>
              <th>Nombre</th>
              <th>Cantidad</th>
              <th>Cantidad min</th>
              <th>Precio</th>
              <th>Precio Venta</th>
              <th>Baja</th>
              <th>Editar</th>
              <th>Inactivar</th>
            </tr>
            <?php
              if ($prod_data) {
                foreach ($prod_data as $user) {
                  echo '
                 <tr>
                     <td>' . $user["id"] . '</td>
                     <td>' . $user["categoria_id"] . '</td>
                     <td>' . $user["imagen"] . '</td>
                     <td>' . $user["nombreProd"] . '</td>
                     <td>' . $user["stock"] . '</td>
                     <td>' . $user["stock_min"] . '</td>
                     <td>' . $user["precio"] . '</td>
                     <td>' . $user["precio_venta"] . '</td>
                     <td>' . $user["eliminado"] . '</td>
                     <td><a href="' . base_url('userMod') . $user["id"] . '" class="btn btn-sm"><img src="public/assets/img/edit.svg" alt=""></a></td>
                     <td><a href="" class="btn btn-sm"><img src="public/assets/img/bx-user-minus.svg" alt=""></a></td>
                </tr>';
                }
              }
              ?>
          </table>
        </div>
      </div>
<!------------//FIN// LISTA DE PRODUCTOS-------------->       
    </div>
<!------------//FIN//div que contiene al boton y a la lista de prod-------------->    
<!------------ AGREGAR PRODUCTOS-------------->   
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Nuevo Producto:
        </div>
        <form action="" class="p-4">
          <div class="mb-3">
            <label class="form-label">Categoria</label>
            <input type="text" class="form-control" name="textNombre" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">Cantidad del producto</label>
            <input type="number" class="form-control" name="textEdad" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" name="textEdad" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">Precio del producto</label>
            <input type="number" class="form-control" name="numero" step="0.1" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">Imagen del producto</label>
            <input type="file" id="imageFile" accept="image/*" multiple>
          </div>
          <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit" class="btn btn-primary" value="Cargar Producto">
          </div>
        </form>
      </div>
    </div>
<!------------//FIN// AGREGAR PRODUCTOS-------------->  
  </div>
</div>
<br>