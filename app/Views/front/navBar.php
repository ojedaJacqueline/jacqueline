<body>
  <header>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <div class="navbar-brand"></div>
        <img src="public/assets/img/A.jpg" alt="ropa3" class="d-block rounded-circle" style="width: 10%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
 
 
        <!-- -------------------------------- NAVBAR PARA ADMINISTADORES -------------------------------- -->
 <?php if(session()->get('perfil_id') == '1'):?>
  <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('userActivo'); ?>">CRUD Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('produc'); ?>">CRUD Productos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Consultas</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url('consulLog'); ?>">Consultas Logeados</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('consulNolog'); ?>">Consultas NO Logeados</a></li>
              </ul>
            </li>
						<li class="nav-item">
            <a><i class="nav-link"style="color:aquamarine;">Bienvenido, Adm.<?php echo $_SESSION['nombre'] ?> </i></a>
            </li>


            <li class="nav-item">
            <a  href="href="<?php echo base_url('logout'); ?>""><i type="button" class="btn btn-outline-danger me-md-2">Salir</i></a>
        
            </li>
        
                </ul>                   
        
        <!-- -------------------------------- FIN NAVBAR PARA ADMINISTADORES -------------------------------- -->   
        

        <!-- -------------------------------- NAVBAR PARA CLIENTES -------------------------------- -->     
              <?php elseif(session()->get('perfil_id') == '2'):?>
              <ul class="nav navbar-nav ml-auto pr-5">
                <li>
                  <a class="nav-link text-light pru" href="<?php echo base_url('carro');?>">
                    <i class="fas fa-cart-plus"></i> 
                    Carrito 
                  </a>
                </li>
                <li>
                      <a class="nav-link text-light pru" href="<?php echo base_url('logout');?>">
                        <i class="fas fa-users"></i> Salir
                      </a>  
                    </li>
                <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle text-light pru" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="far fa-user" style="color:lightskyblue;">>>>>>> ></i> Hola
                            </a>
                            <div class="dropdown-menu fondoDeMenu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item text-dark pru" href="<?php echo base_url('micompra');?>">
                                <i class="fas fa-shopping-bag"></i> Mis Compras
                              </a>
                              <li class="nav-item">
              <a class="nav-link"  style="color:lightskyblue;" href="">Inicio</a>
            </li>
            <!-- TODO:icono carrito -->
            <li class="nav-item">
            <a class="nav-link" href=""><img src="public/assets/img/carrito.svg" alt="ingresar"></a>
            </li>
                              <!-- <a class="dropdown-item text-dark" href="<?php echo base_url('#');?>">
                                <i class="far fa-edit"></i> Mis Datos
                              </a> -->
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item text-dark pru" href="<?php echo base_url('logout');?>">
                                <i class="fas fa-sign-out-alt"></i> Salir
                              </a>
                            </div>
                </li>
              </ul>
        <!-- -------------------------------- FIN NAVBAR PARA CLIENTES -------------------------------- -->
    <!-- -------------------------------- NAVBAR PARA PUBLICO EN GENERAL -------------------------------- -->
    <?php else :?> 
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" class="color" href="<?php echo base_url('inicio'); ?>">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('quienes'); ?>">¿Quiénes Somos?</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo base_url('construccion'); ?>" role="button" data-bs-toggle="dropdown">Catálogo</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url('construccion'); ?>">SACOS</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('construccion'); ?>">CARTERAS</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url('construccion'); ?>">PANTALONES</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('te'); ?>">Tendencia '22</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('comercial'); ?>">Comercialización</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('contacto'); ?>">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('terminos'); ?>">Términos y usos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" style="color:lightgreen;" href="<?php echo base_url('registro'); ?>">Registrarse <img src="public/assets/img/user.svg" alt="ingresar"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:aquamarine;" href="<?php echo base_url('login'); ?>">Ingresar <img src="public/assets/img/log-in.svg" alt="ingresar"></a>
            </li>
         
        </div>
				<?php endif;?>
      </div>
    </nav>
  </header>