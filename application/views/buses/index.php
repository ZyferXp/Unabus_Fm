<h1>Buses</h1>
<p> <a class="btn btn-success" href="<?php echo base_url() ?>buses/guardar"> Agregar Bus a la Flota </a> </p>
<?php if (count($buses)): ?>
 <table class="table tableborder">
    <thead>
       <tr>
          <th>Patente</th>
          <th>Capacidad</th>
          <th>&nbsp;  </th>
       </tr>
    </thead>
    <?php foreach ($buses as $item): ?>
       <tbody>
          <tr>
             <td style="width: 35%"> <?php echo $item->patente ?> </td>
             <td style="width: 35%"> <?php echo $item->capacidad ?> </td>
             <td> 
                <a class="btn btn-info" href="<?php echo base_url() ?>buses/ver/<?php echo $item->patente ?>"> Ver </a>
                <a class="btn btn-info" href="<?php echo base_url() ?>buses/guardar/<?php echo $item->patente ?>"> Editar </a>
                <a class="btn btn-danger eliminar_bus" href="<?php echo base_url() ?>buses/eliminar/<?php echo $item->patente ?>"> Eliminar </a> 
             </td>
          </tr>
       </tbody>
    <?php endforeach; ?>
 </table>
<?php else: ?>
 <p> No hay buses disponibles </p>
<?php endif; ?>
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