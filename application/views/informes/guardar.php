<h1>Guardar Bus</h1>
<form method="post" action="<?php echo base_url() ?>informes/guardar_post/<?php echo $patente ?>">
    <div class="row">
       <label>Patente</label>
       <input type="text" name="patente" required="required" value="<?php echo $patente ?>" />
    </div>
    <div class="row">
       <label>Capacidad</label>
       <input type="number" min="46" max="49" name="capacidad" required="required" value="<?php echo $capacidad; ?>" />
    </div>
    <div class="row">
       <input type="submit" class="btn btn-success" value="Guardar" />
       <a class="btn btn-danger" href="<?php echo base_url() ?>informes"> Cancelar </a>
    </div>
</form>

