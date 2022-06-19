
<?php if (session()->get('perfil_id') == '1') : ?>
<!-------------------CAROUSEL------------------------------------------- -->
<div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">
<br>
<h1>Bienvenido <?php echo $_SESSION['nombre'] ?></h1>
<br>
  <!-- The slideshow/carousel -->
  <div class="col-12" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/assets/img/CRDFON.jpg" alt="ropa1" class="d-block mx-auto" style="width:100% ">
    </div>
  </div>
  </div>
</div>
<br>
<br>

<?php elseif (session()->get('perfil_id') == '2') : ?>
  <br>
<h1>Hola, <?php echo $_SESSION['nombre'] ?></h1>
<br>
  
<div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">

  <!-- The slideshow/carousel -->
  
  <div class="col-12" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/assets/img/A.jpg" alt="ropa1" class="d-block mx-auto" width="700px " height="700px">
    </div>

  </div>
  </div>
</div>
<br>
<?php else : ?>
<br>
<?php endif; ?>