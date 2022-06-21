<h1>Ventas</h1>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <div class="card">
        <div class="card-header" style="color:darkgreen;">
          LISTA DE VENTAS
        </div>
        <div class="p-4">
          <table class="table alingn-middle">
          
              <tr>
                <th>ID</th>
                <th>Fecha de compra</th>
                <th>Usuarios</th>
                <th>Total de la compra</th>
              </tr>
          
            <?php foreach ($venta_data as $key => $vent) :?>
           
              <tr>
                <td ><?= $vent["id"] ?></td>
                <td><?= $vent["fecha"] ?></td>
                <td><?= $vent["usuarios_id"] ?></td>
              
                <td><?= $vent["total_venta"] ?></td>
              </tr>
         
               
          
              <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>