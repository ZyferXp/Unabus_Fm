<h1>Buses</h1>
<p> <a class="btn btn-success" href="<?php echo base_url() ?>buses/guardar"> Agregar Bus a la Flota </a> </p>

<div class="col-lg-12">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Usuarios Registrados en el sistema
        </div>
        <!-- /.panel-heading -->
        <?php if (count($buses)): ?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-usuarios">
                    <thead>
                        <tr>
                            <th>Patente</th>
                            <th>Capacidad</th>
                            <th style="width: 20%">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($buses as $item): ?>
                        <tr class="odd gradeX">
                            <td> <?php echo $item->patente ?> </td>
                            <td> <?php echo $item->capacidad ?> </td>
                            <td class="center"> 
                                <a class="btn btn-info" href="<?php echo base_url() ?>buses/ver/<?php echo $item->patente ?>"> Ver </a>
                                <a class="btn btn-info" href="<?php echo base_url() ?>buses/guardar/<?php echo $item->patente ?>"> Editar </a>
                                <a class="btn btn-danger eliminar_bus" href="<?php echo base_url() ?>buses/eliminar/<?php echo $item->patente ?>"> Eliminar </a> 
                            </td>    
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php else: ?>
             <p> No hay buses disponibles </p>
           <?php endif; ?>
            <!-- /.table-responsive -->
          </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    <a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url() ?>ingresos/logueado"> Volver al Menú </a>
</div>
<script type="text/javascript">
   $(".eliminar_bus").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea eliminar este bus?")) {
            location.href = href;
         }
      });
   });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-buses').dataTable();
    });
</script>