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
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" class="color" href="<?php echo base_url('inicio'); ?>">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('quienes'); ?>">¿Quiénes Somos?</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo base_url('ventas_resumen'); ?>" role="button" data-bs-toggle="dropdown">Cátalogo</a>
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
        </div>
      </div>
    </nav>
  </header>