<header>
    <div id="inicio" class="divBoxFooter">
        <img  class="imgFooter" src="<?php echo base_url("../assets/img/guitarCent_logo.png");?>" alt="Logo Footer">
      
    </div>
    <h2 class="h2">Bienvenido al mundo de la Musica y sus instrumentos</h2>
</header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a href="<?php echo base_url('/');?>"><img class="logo_nav" src="<?php echo base_url("../assets/img/guitar_logo_title.jpg");?>" alt=""></a>
    <a class="navbar-brand" href="<?php echo base_url('/');?>">Guitar Cent</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/');?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('quieneSomos');?>">Quienes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('acercaDe');?>">Acerca De</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Guitarras</a></li>
            <li><a class="dropdown-item" href="#">Bajos</a></li>
            <li><a class="dropdown-item" href="#">Baterias</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Componentes</a></li>
          </ul>
        </li>
        <?php if (!(session()->get('id_perfil') == 1 || session()->get('id_perfil') == 2)): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('registrarse');?>">Registrate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('login');?>"><i class="fa-solid fa-user-large"> </i>Iniciar Sesion</a>
          </li>
          <?php endif; ?>
          <?php if (session()->get('id_perfil') == 2): ?>
            <li>
            <a class="nav-link" class="btn btn-outline-success d-block mb-3" href="<?= base_url('user/editar_user/'.session()->get('id_usuario'));?>">Modificar mis Datos</a>
            </li>
            <li >
              <a class="nav-link"  href="<?php echo base_url('/Cerrar-Sesion') ?>">Cerrar sesión</a>
             </li>
             
                <?php endif; ?>
          <?php if (session()->get('id_perfil') == 1): ?>
                  
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Crud Usuarios
                        </a>
                     
                       <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url("/usuarios"); ?>">Tabla de Usuarios</a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo base_url("/baja_usuario"); ?>">Tabla de Eliminados</a>
                            </li>
                                                   
                        </ul>
                       
  

                        </li>
                        

   

                       
    <li >
        <a class="nav-link" href="<?php echo base_url('/Cerrar-Sesion') ?>">Cerrar sesión</a>
    </li>

  
    
 
              
                <?php endif; ?>
      
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>



</nav>  

