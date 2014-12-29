<h1>Guardar Buses</h1>
 <div class="row">
     <div class="col-lg-12">
         <div class="panel panel-danger">
             <div class="panel-body">
                 <div class="col-lg-3">

                 <form role="form" method="post" action="<?php echo base_url() ?>buses/guardar_post/<?php echo $patente ?>">
                     <div class="form-group">
                        <label class="control-label">Patente</label>
                        <input class="form-control" type="text" name="patente" required="required" value="<?php echo $patente ?>" />
                     </div>
                     <div class="form-group">
                        <label class="control-label">Capacidad</label>
                        <input class="form-control" type="number" min="42" max="46" name="capacidad" required="required" value="<?php echo $capacidad; ?>" />
                     </div>
                     <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Guardar" />
                        <a class="btn btn-danger" href="<?php echo base_url() ?>buses"> Cancelar </a>
                     </div>
                 </form>

                 </div>                            
             </div>
         </div>
           <a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url() ?>usuarios"> Volver al Menú Usuarios </a>
     </div>