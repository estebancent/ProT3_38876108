<section>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h2 class="text-center mt-3">Tabla de Usuarios</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <a type="button" class="btn btn-outline-success" href="<?= base_url('registrarse');?>">Agregar usuario</a>
  </div>
</nav>


    <?php if (session()->getFlashdata('warning')): ?>
    <div class="custom-alert h6 text-center alert alert-warning alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <?= session()->getFlashdata('warning') ?>
    </div>
<?php endif; ?>
    <section class="container mt-4 text-center">
    <form action="<?= base_url('/buscar_usuario') ?>" method="post" class="mb-3">
        <div class="input-group input-group-sm">
            <input type="text" name="search" class="form-control" placeholder="Buscar producto">
            <button type="submit" class="btn  btn-sm custom-btn">Buscar</button>
        </div>
    </form>

    <?php if (!empty($search)) : ?>
        <a href="<?= site_url('/usuarios') ?>" class="btn btn-outline-secondary">Volver a Usuarios</a>
        <p class="alert alert-warning collapse show" id="collapseExample2">
        No se encontraron registros</p>
    <?php endif; ?>
    <a href="<?= site_url('/baja_usuario') ?>" class="btn btn-outline-secondary">Eliminados</a>
</section>


<section>

<div class="container mt-5">
    <div class="table-responsive">
        <table  class="table table-dark table-hover">
            <thead >
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Fecha Modificación</th>
                 
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                
                 
            <?php
             
            foreach ($users as $user) : ?>
                  
                       
                        
                        <tr>
                        <td class="resaltado"><?= $user['id_usuario'] ?></td>
                        <td><?= $user['nombre'] ?></td>
                        <td><?= $user['apellido'] ?></td>
                        <td><?= $user['email']?></td>
                        <td><?= $user['descripcion']?></td>
                        <?php if ($user['estado'] == 1) { ?>
                         <td>Activo</td>
                          <?php } else { ?>
                           <td>Inactivo</td>
                          <?php } ?> 
                        
                      
                        <td><?= $user['fecha_modificacion']?></td>
                   
                       
                        <td>
                        <a type="button" class="btn btn-outline-success d-block mb-3" href="<?= base_url('user/editar_user/'.$user["id_usuario"]);?>">Modificar</a>
                    <?php if ($user['estado'] == 1) { ?>
                      <a type="button" class="btn btn-outline-warning d-block" href="<?= base_url('Baja-user/'.$user['id_usuario']);?>">Baja</a>
                    <?php } else { ?>
                      <a type="button" class="btn btn-outline-danger  d-block" href="<?= base_url('Baja-user/'.$user['id_usuario']);?>">Activar</a>
                    <?php } ?> 
                        </td>
                   
                       
                    </tr>
                   
                    <?php endforeach ?>
            </tbody>
        </table>
        <div class="pagination">
        <?= $paginador->links(); ?>
</div>
    </div>
    </div>
</section>