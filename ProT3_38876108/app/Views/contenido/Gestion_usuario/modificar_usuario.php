
<section>

<div >
    <div class="row mt-3">
      <div class="col-md-6 mx-auto bg-dark rounded-top wrapper">
      <h3 class="text-white text-center pt-3">Editar Usuario</h3>
      <p class="text-white text-center lead mb-3">Guitar Cent Instrumentos</p>
        <!-- Comienzo del formulario -->
  <!--inicio de secion-->
  <div class="custom-alert">
    <!--recuperamos datos con la función Flashdata para mostrarlos-->
    <?php if (session()->getFlashdata('warning')) {
        echo "<div class='h6 text-center alert alert-warning alert-dismissible'>
              <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('warning') . "
           </div>";
    }
    ?>
</div>
<?php if (session()->getFlashdata('mensaje')) { ?>
                        <div class="alert alert-warning collapse show" id="collapseExample2">
                        <?= session()->getFlashdata('mensaje');?>
                        <a data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="true" aria-controls="collapseExample2"><i class="fa-solid fa-xmark fa-xl" style="position: absolute; right: 15px; top: 27; color:black;"></i></a>
                        </div>
                        <?php } ?>



<!-- Resto del código del formulario -->


    <?php  $validation = \Config\Services::validation();?>
    
    <?php if (session()->has('errors')) : ?>
    <div class="mensajeBad" role="alert">
        <ul>
            <?php foreach (session('errors') as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<!-- Resto del código del formulario -->


 
             
           
    <form action="<?= base_url('user/editar/' . $user['id_usuario']) ?>"  method="post" enctype="multipart/form-data">
    <div class=" text-white imb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" name="nombre" placeholder="Nombre" value="<?= $user['nombre'] ?>" class="form-control" >
    </div>
  
   
    <div class=" text-white imb-3">
        <label for="apellido" class="form-label">Apellido:</label>
        <input type="text" name="apellido" placeholder="Apellido" value="<?= $user['apellido'] ?>" class="form-control" >
    </div>
  
    <div class= " text-white  mb-3">
        <label for="email" class="form-label">Correo</label>
        <input type="email" name="email" placeholder="Email"   value="<?= $user['email'] ?>"   class="form-control" >
    </div>
    <div class="text-white imb-3">
    <label for="password" class="form-label">Contraseña Nueva</label>
    <input type="password" name="password" class="form-control" >
    <div id="emailHelp" class="form-text">No compartas tus contraseñas con nadie mas.</div>
    
  </div>
  <?php if($validation->getError('password')) {?>
                                    <div  class="mensajeBad" role="alert">
                          
                                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?= $error = $validation->getError('password'); ?>
                                    </div>
                                    <?php }?>

                                    <div class="div">
  <div class="text-white imb-3">
    <label for="password_equal" class="form-label">Confirmar Contraseña</label>
    <input type="password" name="password_equal" class="form-control" id="password_equal" >
   
  </div>
  <?php if($validation->getError('password_equal')) {?>
                                   <div  class="mensajeBad" role="alert">
                                     <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                     <?= $error = $validation->getError('password_equal'); ?>
                                  </div>
                                   <?php }?>

 
   
  


<div class="d-grid mt-3">
    <button type="submit" class="btn btn-outline-success">Modificar Usuario</button>
    <a href="<?= site_url('/usuarios') ?>"  class="btn btn-dark">volver a usuarios</a>
</div>

</form>



             <!-- Fin del formulario -->
           </div>
         </div>
       </div>
     

</section>