<h1>Recorridos</h1>
<p> <a class="btn btn-success" href="<?php echo base_url() ?>recorridos/guardar"> Agregar Recorridos al Sistema </a> </p>
<?php if (count($recorridos)): ?>
 <table class="table tableborder">
    <thead>
       <tr>
          <th>Id Recorrido</th>
          <th>Origen</th>
          <th>Destino</th>
          <th>Duración HH:MM</th>
          <th>Valor $</th>          
       </tr>
    </thead>
    <?php foreach ($recorridos as $item): ?>
       <tbody>
          <tr>
             <td style="width: 15%"> <?php echo $item->id_recorrido ?> </td>
             <td style="width: 15%"> <?php echo $item->origen ?> </td>
             <td style="width: 15%"> <?php echo $item->destino ?> </td>
             <td style="width: 15%"> <?php echo $item->duracion ?> </td>
             <td style="width: 15%"> <?php echo "$ ".number_format($item->valor, 0, ',', '.'); ?> </td>                       
             <td> 
                <a class="btn btn-info" href="<?php echo base_url() ?>recorridos/ver/<?php echo $item->id_recorrido ?>"> Ver </a>
                <a class="btn btn-info" href="<?php echo base_url() ?>recorridos/guardar/<?php echo $item->id_recorrido ?>"> Editar </a>
                <a class="btn btn-danger eliminar_recorrido" href="<?php echo base_url() ?>recorridos/eliminar/<?php echo $item->id_recorrido ?>"> Eliminar </a> 
             </td>
          </tr>
       </tbody>
    <?php endforeach; ?>
 </table>
<?php else: ?>
 <p> No hay recorridos disponibles </p>
<?php endif; ?>
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