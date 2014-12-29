<h1>Guardar Usuarios</h1>
 <div class="row">
     <div class="col-lg-12">
         <div class="panel panel-info">
             <div class="panel-body">
                 <div class="col-lg-3">

                     <form role="form" method="post" action="<?php echo base_url() ?>usuarios/guardar_post/<?php echo $id_usuario ?>">
                         <div class="form-group">
                            <label class="control-label">Rut</label>
                            <input class="form-control" type="text" name="rut" required="required" value="<?php echo $rut ?>" />
                         </div>
                         <div  class="form-group">
                            <label class="control-label">Nombre</label>
                            <input class="form-control" type="text" name="nombre" required="required" value="<?php echo $nombre ?>" />
                         </div>
                         <div  class="form-group">
                            <label class="control-label">Apellido</label>
                            <input class="form-control" type="text" name="apellido" required="required" value="<?php echo $apellido ?>" />
                         </div>
                         <div  class="form-group">
                            <label class="control-label">Contraseña</label>
                            <input class="form-control" type="text" name="contrasena" required="required" value="<?php echo $contrasena ?>" />
                         </div>            
                         <div  class="form-group">
                            <label class="control-label">Tipo Usuario</label>
                            <?php echo form_dropdown('tipo_usuario', $tipos_usuarios, $tipo_usuario, 'class="form-control"'); ?> 
                         </div>
                         <div  class="form-group">
                            <input type="submit" class="btn btn-success" value="Guardar" />
                            <a class="btn btn-danger" href="<?php echo base_url() ?>usuarios"> Cancelar </a>
                         </div>
                     </form>

                 </div>                            
             </div>
         </div>
           <a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url() ?>usuarios"> Volver al Menú Usuarios </a>
     </div>
