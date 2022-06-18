<br>
<h1>Consultas</h1>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <div class="card">
        <div class="card-header" style="color:brown ;">
          CONSULTAS USUARIOS NO REGISTRADOS
        </div>
        <div class="table-responsive">
          <table class="table d-flex">
              <tr>
                <th>Id</th>
                <th>Nombre y Apellido</th>
                <th>Email</th>
                <th>Asunto</th>
                <th>Comentario</th>
                <th>Registrado</th>
              </tr>
              <?php foreach($consul_data as $key => $user) :?>
                <?php if($user['registrado'] == 'NO'): ?>
                  
                <tr>
                <td><?= $user["id_contacto"] ?></td>
                <td><?= $user["nya"] ?></td>
                <td><?= $user["email"] ?></td>
                <td><?= $user["asunto"] ?></td>
                <td><?= $user["mensaje"] ?></td>
                <td><?= $user["registrado"] ?></td>
              </tr>
              <?php endif; ?>
                <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<br>