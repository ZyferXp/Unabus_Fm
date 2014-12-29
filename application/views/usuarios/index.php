<h1>Usuarios</h1>
<p> <a class="btn btn-success" href="<?php echo base_url() ?>usuarios/guardar"> Agregar Usuario al Sistema </a> </p>

<div class="col-lg-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            Usuarios Registrados en el sistema
        </div>
        <!-- /.panel-heading -->
        <?php if (count($usuarios)): ?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-usuarios">
                    <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Tipo Usuario</th>
                            <th style="width: 20%">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $item): ?>
                        <tr class="odd gradeX">
                            <td> <?php echo $item->rut ?> </td>
                            <td> <?php echo $item->nombre ?> </td>
                            <td> <?php echo $item->apellido ?> </td>
                            <td> <?php echo $item->descripcion ?> </td>
                            <td class="center"> 
                               <!--<a class="btn btn-info" href="<?php //echo base_url() ?>usuarios/ver/<?php //echo $item->id_usuario ?>"> Ver </a>-->
                               <a class="btn btn-info" href="<?php echo base_url() ?>usuarios/guardar/<?php echo $item->id_usuario ?>"> Editar </a>
                               <a class="btn btn-danger eliminar_usuario" href="<?php echo base_url() ?>usuarios/eliminar/<?php echo $item->id_usuario ?>"> Eliminar </a> 
                            </td>    
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php else: ?>
            <p> No hay usuarios disponibles </p>
           <?php endif; ?>
            <!-- /.table-responsive -->
          </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    <a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url() ?>ingresos/logueado"> Volver al Menú </a>
</div>
<script type="text/javascript">
   $(".eliminar_usuario").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea eliminar este usuario?")) {
            location.href = href;
         }
      });
   });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-usuarios').dataTable();
    });
</script>