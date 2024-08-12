
  <section class="d-flex align-items-center justify-content-center">
  
  <div  class="text-center bg-secondary rounded-3 p-5 shadow-lg text-white">
    <div>
   
<form  method="post" action="<?php echo base_url('ingresar') ?>">
<h2 class="bg-dark text-center text-white">Iniciar Sesion</h2>
<?php $validation = \Config\Services::validation(); ?>
<?php if(session()->getFlashdata('errors') !== null) : ?>
         <div class="mensajeBad" role="alert">
            <?= session()->getFlashdata('errors'); ?>
         </div>
        
        <?php endif;?>
 
   <div class="mb-3">
    <label for="email" class="form-label">Direccion de Correo</label>
    <input name="email" class="form-control"  value="<?= set_value('email') ?>" >
  
  </div>
  <?php if($validation->getError('email')) {?>
                                 <div class="mensajeBad" role="alert">
                                 <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                 <?= $error = $validation->getError('email'); ?>
                                 </div>
                                 <?php }?>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input name="password" type="password" class="form-control" id="password" value="<?= set_value('password') ?>">
   
  </div>
  <?php if($validation->getError('password')) {?>
                                 <div class="mensajeBad" role="alert">
                                 <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                 <?= $error = $validation->getError('password'); ?>
                                 </div>
                                 <?php }?>
  <div class="text-center" style="justify-content: space-between;" > 
  
  <a  class="nav-item nav-link text-justify " href=<?php echo base_url('registrarse');?>> <span class="font-italic isai5">¿Aun no te has registrado?</span>Registrate aqui</a>
</div>
<br>
  <input type="submit" value="Iniciar Sesion" class="btn btn-dark" style="">
</form>
<br>
<?php if (session()->getFlashdata('mensaje')) { ?>
            <div  class="mensajeBad" role="alert">
            
            <?= session()->getFlashdata('mensaje');?>
            
                
            </div>
        <?php } ?>
</div>
</div>




  </section>


