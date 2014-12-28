<h1>Recorridos</h1>
<p> <a class="btn btn-success" href="<?php echo base_url() ?>recorridos/guardar"> Agregar Recorridos al Sistema </a> </p>

<div class="col-lg-12">
    <div class="panel panel-yellow">
        <div class="panel-heading">
            Recorridos Registrados en el sistema
        </div>
        <!-- /.panel-heading -->
        <?php if (count($recorridos)): ?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-recorridos">
                    <thead>
                        <tr>
                            <th>Id Recorrido</th>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Duración HH:MM</th>
                            <th>Valor $</th>
                            <th style="width: 20%">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recorridos as $item): ?>
                        <tr class="odd gradeX">
                            <td> <?php echo $item->id_recorrido ?> </td>
                            <td> <?php echo $item->origen ?> </td>
                            <td> <?php echo $item->destino ?> </td>
                            <td> <?php echo $item->duracion ?> </td>
                            <td> <?php echo "$ ".number_format($item->valor, 0, ',', '.'); ?> </td>                          
                            <td class="center"> 
                                <a class="btn btn-info" href="<?php echo base_url() ?>recorridos/ver/<?php echo $item->id_recorrido ?>"> Ver </a>
                                <a class="btn btn-info" href="<?php echo base_url() ?>recorridos/guardar/<?php echo $item->id_recorrido ?>"> Editar </a>
                                <a class="btn btn-danger eliminar_recorrido" href="<?php echo base_url() ?>recorridos/eliminar/<?php echo $item->id_recorrido ?>"> Eliminar </a> 
                            </td>    
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php else: ?>
             <p> No hay recorridos disponibles </p>
           <?php endif; ?>
            <!-- /.table-responsive -->
          </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    <a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url() ?>ingresos/logueado"> Volver al Menú </a>
</div>
<script type="text/javascript">
   $(".eliminar_recorrido").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea eliminar este recorrido?")) {
            location.href = href;
         }
      });
   });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-recorridos').dataTable();
    });
</script>