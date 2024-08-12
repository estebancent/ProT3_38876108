  <section  class="d-flex align-items-center justify-content-center" >
<div  class="text-center bg-secondary rounded-3 p-5 shadow-lg text-white">
<?php if (session()->getFlashdata('mensaje')) { ?>
                        <div class="alert alert-warning collapse show" id="collapseExample2">
                        <?= session()->getFlashdata('mensaje');?>
                        <a  data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="true" aria-controls="collapseExample2"><i class="fa-solid fa-xmark fa-xl" style="position: absolute; right: 15px; top: 27; color:black;"></i></a>
                        </div>
                        <?php } ?>
    <div>
    <?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('validar') ?>">
<h2 class="bg-dark text-center text-white">Registrar Usuario</h2>

  <div class="mb-3">
  <label  for="nombre" class="form-label">Nombre</label>
  <input class="form-control" name="nombre" type="text" id="nombre" value="<?= set_value('nombre') ?>">
  <?php if($validation->getError('nombre')) {?>
                                 <div class="mensajeBad" role="alert">
                                 <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                 <?= $error = $validation->getError('nombre'); ?>
                                 </div>
                                 <?php }?>
  </div>
  <div class="mb-3">
  <label for="apellido" class="form-label">Apellido</label>
  <input class="form-control" name="apellido" type="text" id="apellido" value="<?= set_value('apellido') ?>">
  <?php if($validation->getError('apellido')) {?>
                                  <div class="mensajeBad" role="alert">
                                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                  <?= $error = $validation->getError('apellido'); ?>
                                  </div>
                                  <?php }?>
  </div>
   <div class="mb-3">
    <label for="email" class="form-label">Direccion de Correo</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= set_value('email') ?>">
    <?php if($validation->getError('email')) {?>
                                    <div  class="mensajeBad" role="alert">
                                      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    <?= $error = $validation->getError('email'); ?>
                                      </div>
                                    <?php }?>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
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
  <div class="mb-3">
    <label for="password_equal" class="form-label">Confirmar Contraseña</label>
    <input type="password" name="password_equal" class="form-control" id="password_equal" >
   
  </div>
  <?php if($validation->getError('password_equal')) {?>
                                   <div  class="mensajeBad" role="alert">
                                     <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                     <?= $error = $validation->getError('password_equal'); ?>
                                  </div>
                                   <?php }?>
                        
  <div class="text-center" style="justify-content: space-between;" > 
  
  <a  class="nav-item nav-link text-justify " href=<?php echo base_url('login');?>> <span class="font-italic isai5">¿Ya estas registrado?</span>Iniciar sesion aquí</a>
</div>
<br>
  <input type="submit" value="Regitrarse" class="btn btn-dark" style="">
</form>
</div>
</div>




  </section>

