    <!-- Asientos CSS -->
<link href="<?php echo base_url() ?>css/asientos.css" rel="stylesheet">
<h1>Ver Detalle de Bus</h1>
 <div class="row">
     <div class="col-lg-12">
         <div class="panel panel-danger">
             <div class="panel-heading">
                 <h2><?php echo $buses->patente ?> (Capacidad: <?php echo $buses->capacidad; ?> asientos)</h2>
             </div>
             <div class="panel-body">
                 <div class="col-lg-3">
                    <p></p>
                    <?php 
                        $capacidad = $buses->capacidad."<br>"; 
                        $filas = ($capacidad / 4)."<br>"; 
                        $filas = explode('.',$filas);
                        $filas = $filas[0];
                        $vacios = ($capacidad - ($filas * 4))."<br>";
                        if($vacios == 0)
                            $filas = $filas - 1;
                    ?>
                    <table width="100" border="1" align="center" class="tabla_asientos">
                        <tr>
                            <td colspan="2">C</td>
                            <td width="20%" rowspan="<?php echo $filas+2;?>">&nbsp;</td>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <?php 
                          for($x=1;$x<=$capacidad;$x++){
                              if($x % 4 == 1) 
                                 echo '<tr>';
                        ?>
                            <td width="20%"><?php echo $x; ?></td>
                        <?php 
                        if($x==$capacidad && $vacios !=0)
                            for($v=0;$v<=(3-$vacios);$v++)
                            {
                        ?>
                            <td width="20%">&nbsp;</td>
                        <?php
                            }
                        if($x % 4 == 0) 
                           echo '</tr>';
                        } 
                        ?>  
                    </table>

                 </div>                            
             </div>
         </div>
           <a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url() ?>buses"> Volver al Menú Buses </a>
     </div>