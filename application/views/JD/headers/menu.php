  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


  <div class="container-fluid">

  <a class="navbar-brand" href="<?=base_url('index.php/OrdenesC/show') ?>">
      <!-- <img src="https://ketermex.com/wp-content/uploads/2016/09/logo-keter.png" width="90" height="33"> -->
      <img src="<?php echo base_url('/assets/image/logo-keter.png');?>" alt="keter_logo" width="90" height="33">
  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?=base_url('index.php/DashCJD/show') ?> "><i class="fa-solid fa-house"></i> Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('index.php/OrdenesC/show') ?>">Órdenes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('index.php/MaterialesC/show') ?>">Material</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('index.php/QuimicosC/show') ?>">Químico</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('index.php/ColoresC/show') ?>">Color</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('index.php/TratamientosC/show') ?>">Tratamiento</a>
      </li>

    </ul>

    <ul class="navbar-nav">
      <li class="nav-item dropdown d-flex">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Hola, bienvenido <img src="<?php echo base_url('assets/image/user.png'); ?>" width="28" height="28"></a>
        <ul class="dropdown-menu">
          <li></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="<?=base_url('') ?>">Cerrar sesión</a></li>
        </ul>
      </li>
    </ul>

  </div>
  </div>
  </nav>