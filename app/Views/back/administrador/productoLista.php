<br>
<h1>Lista de Productos</h1>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <div class="d-grid">
        <input type="hidden" name="oculto" value="1">
        <input type="submit" class="btn" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" value="Ver Productos Inactivos">
      </div>
      <br>
      <div class="card">
        <div class="card-header">
          PRODUCTOS ACTIVOS
        </div>
        <div class="table-responsive">
          <table class="table d-flex ">
            <tr class="table-success">
              <th scope="col">Id</th>
              <th scope="col">Categoria</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Nombre</th>
              <th scope="col">Precio</th>
              <th scope="col">Imagen</th>
              <th scope="col">Editar</th>
              <th scope="col">Inactivar</th>
            </tr>
            <tr>
              <td scope="row">1</td>
              <td>roger gomez</td>
              <td>34</td>
              <td>leo</td>
              <td>leo</td>
              <td>leo</td>
              <td><a href="'.base_url().'/crud/fetch_single_data/'.$user[" id"].'" class="btn btn-sm"><img src="public/assets/img/edit.svg" alt=""></a></td>
              <td><a href="" class="btn btn-sm"><img src="public/assets/img/trash.svg" alt=""></a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
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
  </div>
</div>
<br>