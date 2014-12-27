<h1>Guardar Recorridos</h1>
<form method="post" action="<?php echo base_url() ?>recorridos/guardar_post/<?php echo $id_recorrido ?>">
<input type="hidden" name="id_recorrido" value="<?php echo $id_recorrido ?>">
<div class="row">
<div class="span5">
    <div class="row">
       <label>Origen</label>
       <?php echo form_dropdown('id_origen', $listado_comunas, $id_origen); ?> 
    </div>
    <div class="row">
       <label>Destino</label>
       <?php echo form_dropdown('id_destino', $listado_comunas, $id_destino); ?> 
    </div>
    <div class="row">
       <label>Duración</label>
       <input type="text" name="duracion" required="required" value="<?php echo $duracion ?>" />
    </div>
    <div class="row">
       <label>Valor $</label>
       <input type="number" min="1000" max="50000" name="valor" required="required" value="<?php echo $valor; ?>" />
    </div>    
    <div class="row">
       <input type="submit" class="btn btn-success" value="Guardar" />
       <a class="btn btn-danger" href="<?php echo base_url() ?>recorridos"> Cancelar </a>
    </div>
</div>
<div class="span5">
     <label>Destinos Intermedios</label>
     <?php if($id_recorrido == NULL) $destinos_intermedios = 0;
	 echo form_multiselect('id_destino_intermedio[]', $listado_comunas, $destinos_intermedios); ?> 
</div>
</div> 
</form>

