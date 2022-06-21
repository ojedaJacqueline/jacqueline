<div class="color  mt-3 mt-4 p-5">
  <h1>Catálogo</h1>
</div>



<section class=" row shop container ">
<!-- Catalogo-->

<?php foreach ($producto as $row){

?>
      <div class="shop-content mt-4 mt-5 p-5" style="width: 50%  ;">
        <!-- box1 -->
        <div class="product-box"style="width: 80%" class="product-img">

          <img class=" alto_min" style="width: 80%" src="<?= base_url('public/assets/uploads/'. $row["imagen"]) ?>" alt="" class="product-img">
          <h2 class="product-title"><?php echo $row['nombreProd']; ?></h2>
          <br>
          <span class="price"><?php echo $row['precio']; ?></span>
          <br>
           <!--disponible/no disponible-->
           <?php if ($row['stock'] == 0) {
                  echo '<span>Sin stock</span>';
                } elseif ($row['stock_min'] >= $row['stock']) {
                  echo '<span >Ultimas uniades</span>';
                } else {
                  echo '<span>Stock</span>';
                } 
                ?>
                <?php if ($row['stock'] < $row['stock_min'] && $row['stock'] > 0) {
                  echo '<span >Cantidad inferior al mínimo: ' . $row['stock_min'] . ' unidades</span>';
                } elseif ($row['stock'] == 0) {
                  echo '<span >No disponible</span>';
                } else {
                  echo '<span>Disponible: ' . $row['stock'] . ' unidades</span>';
                } 
                ?>
              <?php helper('form');
              if(($row['stock'] > 0)){
                //envia los datos del producto en forma de formulario para agregar al carrito
                echo form_open('Carrito_controller/AgregarCarrito');
                echo form_hidden('id', $row['id']);
                echo form_hidden('precio', $row['precio_venta']);
                echo form_hidden('nombre', $row['nombreProd']);
              ?>
          <i class="bx bx-shopping-bag add-cart">      
            <?php $btn = array('class' => 'btn ', 'value' => 'Agregar Carrito', 'name' => 'action');
                echo form_submit($btn);
                echo form_close(); 
                ?></i>
                    <?php } else {?>
                <?php }?>
              
        </div>
    
      </div>
      <?php } ;?> 
     
      </section>