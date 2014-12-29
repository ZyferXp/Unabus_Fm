<h1>Viajes</h1>
<p> <a class="btn btn-success" href="<?php echo base_url() ?>viajes/guardar"> Agregar Viaje </a> </p>

<div class="col-lg-12">
    <div class="panel panel-green">
        <div class="panel-heading">
            Viajes Registrados en el sistema
        </div>
        <!-- /.panel-heading -->
        <?php if (count($viajes)): ?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-viajes">
                    <thead>
                        <tr>
                            <th>Código Viaje</th>
                            <th>Fecha Hora Salida</th>
                            <th>Fecha Hora llegada</th>
                            <th>Patente</th>
                            <th>Recorrido</th>
                            <th style="width: 20%">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($viajes as $item): ?>
                        <tr class="odd gradeX">
                            <td> <?php echo $item->codigo_servicio?> </td>
                            <td> <?php echo $item->fechahora_salida ?> </td>
                            <td> <?php echo $item->fechahora_llegada ?> </td>
                            <td> <?php echo $item->patente ?> </td>
                            <td> <?php echo $item->recorrido ?> </td>
                            <td class="center"> 
                                <a class="btn btn-info" href="<?php echo base_url() ?>viajes/ver/<?php echo $item->codigo_servicio ?>"> Ver </a>
                                <a class="btn btn-info" href="<?php echo base_url() ?>viajes/guardar/<?php echo $item->codigo_servicio ?>"> Editar </a>
                                <a class="btn btn-danger eliminar_viaje" href="<?php echo base_url() ?>viajes/eliminar/<?php echo $item->codigo_servicio ?>"> Eliminar </a> 
                            </td>    
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php else: ?>
             <p> No hay viajes disponibles </p>
           <?php endif; ?>
            <!-- /.table-responsive -->
          </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    <a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url() ?>ingresos/logueado"> Volver al Menú </a>
</div>
<script type="text/javascript">
   $(".eliminar_viaje").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea eliminar este viaje?")) {
            location.href = href;
         }
      });
   });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-viajes').dataTable();
    });
</script>