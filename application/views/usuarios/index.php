<h1>Usuarios</h1>
<p> <a class="btn btn-success" href="<?php echo base_url() ?>usuarios/guardar"> Agregar Usuario al Sistema </a> </p>
<?php if (count($usuarios)): ?>
 <table class="table tableborder">
    <thead>
       <tr>
          <th>Rut</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Tipo Usuario</th>
       </tr>
    </thead>
    <?php foreach ($usuarios as $item): ?>
       <tbody>
          <tr>
             <td style="width: 15%"> <?php echo $item->rut ?> </td>
             <td style="width: 15%"> <?php echo $item->nombre ?> </td>
             <td style="width: 15%"> <?php echo $item->apellido ?> </td>
             <td style="width: 15%"> <?php echo $item->descripcion ?> </td>
             <td> 
                <a class="btn btn-info" href="<?php echo base_url() ?>usuarios/ver/<?php echo $item->id_usuario ?>"> Ver </a>
                <a class="btn btn-info" href="<?php echo base_url() ?>usuarios/guardar/<?php echo $item->id_usuario ?>"> Editar </a>
                <a class="btn btn-danger eliminar_usuario" href="<?php echo base_url() ?>usuarios/eliminar/<?php echo $item->id_usuario ?>"> Eliminar </a> 
             </td>
          </tr>
       </tbody>
    <?php endforeach; ?>
 </table>
<?php else: ?>
 <p> No hay usuario disponibles </p>
<?php endif; ?>
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