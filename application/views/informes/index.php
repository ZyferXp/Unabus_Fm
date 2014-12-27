<h1>Buses</h1>
<p> <a class="btn btn-success" href="<?php echo base_url() ?>informes/guardar"> Agregar Bus a la Flota </a> </p>
<?php if (count($informes)): ?>
 <table class="table tableborder">
    <thead>
       <tr>
          <th>Patente</th>
          <th>Capacidad</th>
          <th>&nbsp;  </th>
       </tr>
    </thead>
    <?php foreach ($informes as $item): ?>
       <tbody>
          <tr>
             <td style="width: 35%"> <?php echo $item->patente ?> </td>
             <td style="width: 35%"> <?php echo $item->capacidad ?> </td>
             <td> 
                <a class="btn btn-info" href="<?php echo base_url() ?>informes/ver/<?php echo $item->patente ?>"> Ver </a>
                <a class="btn btn-info" href="<?php echo base_url() ?>informes/guardar/<?php echo $item->patente ?>"> Editar </a>
                <a class="btn btn-danger eliminar_informe" href="<?php echo base_url() ?>informes/eliminar/<?php echo $item->patente ?>"> Eliminar </a> 
             </td>
          </tr>
       </tbody>
    <?php endforeach; ?>
 </table>
<?php else: ?>
 <p> No hay buses disponibles </p>
<?php endif; ?>
<script type="text/javascript">
   $(".eliminar_informe").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea eliminar este bus?")) {
            location.href = href;
         }
      });
   });
</script>