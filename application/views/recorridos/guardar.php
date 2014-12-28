<h1>Guardar Recorridos</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-yellow">
                <div class="panel-body">

                        <form method="post" action="<?php echo base_url() ?>recorridos/guardar_post/<?php echo $id_recorrido ?>">
                        <input type="hidden" name="id_recorrido" value="<?php echo $id_recorrido ?>">
                            <div class="col-lg-3">
                                <div class="form-group">
                                   <label class="control-label">Origen</label>
                                   <?php echo form_dropdown('id_origen', $listado_comunas, $id_origen, 'class="form-control"'); ?> 
                                </div>
                                <div class="form-group">
                                   <label class="control-label">Destino</label>
                                   <?php echo form_dropdown('id_destino', $listado_comunas, $id_destino, 'class="form-control"'); ?> 
                                </div>
                                <div class="form-group">
                                   <label class="control-label">Duración</label>
                                   <input class="form-control" type="text" name="duracion" required="required" value="<?php echo $duracion ?>" />
                                </div>
                                <div class="form-group">
                                   <label class="control-label">Valor $</label>
                                   <input class="form-control" type="number" min="1000" max="50000" name="valor" required="required" value="<?php echo $valor; ?>" />
                                </div>    
                                <div class="form-group">
                                   <input type="submit" class="btn btn-success" value="Guardar" />
                                   <a class="btn btn-danger" href="<?php echo base_url() ?>recorridos"> Cancelar </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                 <label>Destinos Intermedios</label>
                                 <?php if($id_recorrido == NULL) $destinos_intermedios = 0;
                                     echo form_multiselect('id_destino_intermedio[]', $listado_comunas, $destinos_intermedios, 'class="form-control", size="14"'); ?> 
                            </div>

                        </form> 
                </div>                           
            </div>
              <a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url() ?>recorridos"> Volver al Menú Recorridos </a>
        </div>

