<br>
<div class="container-fluid">
  <!-------------------CAROUSEL------------------------------------------- -->
  <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="public/assets/img/ropa8.jpg" alt="ropa1" class="d-block " style="width:100%">
        <div class="carousel-caption">
          <h3 class="p-3 mb-2 bg-white textoc">MODA Y ESTILO</< /h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="public/assets/img/ropa10.jpg" alt="ropa2" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3 class="p-3 mb-2 bg-white textoc">#OTOÑO / INVIERNO '22</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="public/assets/img/ropa7.jpg" alt="ropa3" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3 class="p-3 mb-2 bg-white textoc">Encontrá lo que estás buscando</h3>
        </div>
      </div>
    </div>
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <br>
  <br>
  <!-- video -->
  <div class="container text-center col-md-2 col-lg-5 col-xl-10 mx-auto">
    <video src="public/assets/img/alessandria.mp4" controls>
      <p><a href="public/assets/img/video1.mp4"></a></p>
    </video>
  </div>

  <!-------------------TARJETAS------------------------------------------- -->
 
  <section class="shop container "  style="background:white;">
  <h1>Algunos de Nuestros Productos</h1>
  <br>
  <br>
  <div class="shop-content">
        <!-- box1 -->
        <div class="product-box">
          <img src="public/assets/img/cha1.jpg" alt="" class="product-img">
          <h2 class="product-title">CHALECO CHIC NEGRO</h2>
          <i class='bx bx-purchase-tag-alt add-cart'data-bs-toggle="modal" data-bs-target="#unoModal"></i>
        </div>
        <!-- box1 -->
        <div class="product-box">
          <img src="public/assets/img/cargo12.jpg" alt="" class="product-img">
          <h2 class="product-title">PANTALÓN CARGO</h2>
          <i class='bx bx-purchase-tag-alt add-cart'data-bs-toggle="modal" data-bs-target="#dosModal"></i>
        </div>
        <!-- box1 -->
        <div class="product-box">
          <img src="public/assets/img/cha2.jpg" alt="" class="product-img">
          <h2 class="product-title">CHALECO CHIC ROSA</h2>
          <i class='bx bx-purchase-tag-alt add-cart'data-bs-toggle="modal" data-bs-target="#tresModal"></i>
        </div>
           <!-- box1 -->
           <div class="product-box">
          <img src="public/assets/img/pan123.jpg" alt="" class="product-img">
          <h2 class="product-title">PANTALÓN RECTO NEGRO</h2>
          <i class='bx bx-purchase-tag-alt add-cart'data-bs-toggle="modal" data-bs-target="#cuatroModal"></i>
        </div>
        </div>
        <div>
          <br>
          <h2>Encontra todo lo que estás buscando en la sección de catálogo o haciendo click aquí <button type="button" class="btn btn-link"><h2>Cátalogo</h2></button></h2>
        </div>
  </section>
</div>
<br>
<br>
<!-- modal -->
<!-- The Modal 1-->
<div class="modal fade" id="unoModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">CHALECO CHIC NEGRO</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
      <p>Detalles: </p> 
     <p>Con bolsillos.</p>
     <p>Cierre metalizado.</p> 
     <p>Color:Negro</p>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- The Modal 2-->
<div class="modal fade" id="dosModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">PANTALÓN CARGO</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
     <p>Detalles:</p>
     <p>Con cierre metálico central.</p>
     <p>Botón interno en cintura.</p>
     <p>Bolsillos a la vista.</p>
      <p>Color:Verde</p>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- The Modal 3-->
<div class="modal fade" id="tresModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">CHALECO CHIC ROSA</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
      <p>Detalles: </p> 
     <p>Con bolsillos</p>
     <p>Cierre metalizado </p> 
     <p>Color:Rosa</p>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- The Modal 4-->
<div class="modal fade" id="cuatroModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">PANTALÓN RECTO NEGRO</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
     <p>Detalles: </p> 
     <p>Confeccionado en twill sastrero</p>
     <p>Calce recto y tiro bien alto.</p> 
     <p>Composición:76%Poliester 20%Rayón 4%Elastano</p>
     <p>Color:Negro</p>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>