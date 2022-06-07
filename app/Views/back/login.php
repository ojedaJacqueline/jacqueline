<body>
    <br>
    <br>
    <div class="container">
    <div class="row no-gutters" style="background-color:white ; border-radius:30px; box-shadow: 12px 12px 22px grey">
    <div class="col-lg-5">
        <img src="public\assets\img\c0.jpg" class="img-fluid" alt="" style="border-radius:30px;">
      </div>

        <div class="col-lg-7 px-5 pt-5">
            <div class="col-10">
                <h1>INGRESAR</h1>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <form action="<?php echo base_url('enviarlogin'); ?>" method="post">
                    <div class="mb-3">
                        
                        <label for="InputForEmail" class="form-label" style="color:darkgreen ;">Correo electrónico</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail"placeholder="ejemplo@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label" style="color:darkgreen ;">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword"placeholder="escribir contraseña">
                    </div>
                    <button type="submit" class="btn btn-success">Ingresar</button>
                    <button type="reset" class="btn btn-danger">cancelar</button>

                </form>
                <br>
                <br>
                <div class="d-grid">
          <a class="btn btn-link" href="<?php echo base_url('registro'); ?>">¿NO ESTAS REGISTRADO?HACE CLIC AQUÍ</a>
        </div>
            
            </div>
        </div>
        </div>
    </div>
    <br>
    <br>