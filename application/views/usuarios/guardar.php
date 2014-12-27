<h1> Guardar Usuarios</h1>
<form method="post" action="<?php echo base_url() ?>usuarios/guardar_post/<?php echo $id_usuario ?>">
    <div class="row">
       <label>Rut</label>
       <input type="text" name="rut" required="required" value="<?php echo $rut ?>" />
    </div>
    <div class="row">
       <label>Nombre</label>
       <input type="text" name="nombre" required="required" value="<?php echo $nombre ?>" />
    </div>
    <div class="row">
       <label>Apellido</label>
       <input type="text" name="apellido" required="required" value="<?php echo $apellido ?>" />
    </div>
    <div class="row">
       <label>Contraseña</label>
       <input type="text" name="contrasena" required="required" value="<?php echo $contrasena ?>" />
    </div>            
    <div class="row">
       <label>Tipo Usuario</label>
       <?php echo form_dropdown('tipo_usuario', $tipos_usuarios, $tipo_usuario); ?> 
    </div>
    <div class="row">
       <input type="submit" class="btn btn-success" value="Guardar" />
       <a class="btn btn-danger" href="<?php echo base_url() ?>usuarios"> Cancelar </a>
    </div>
</form>

