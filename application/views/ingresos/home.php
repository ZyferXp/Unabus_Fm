    <div class="masthead">
        <h3 class="muted">Sistema Unabus</h3>
            <h4> Bienvenido/a <?php echo $nombre ?> <?php echo $apellido ?></h4>
    Su perfil es: <?php
					switch($tipo_usuario){
						case 1:	
							echo "Administrador";
							break;
						case 2:	
							echo "Vendedor";
							break;
						case 3:	
							echo "Chofer";
							break;
						case 4:	
							echo "Auxiliar";
							break;
						case 5:	
							echo "Pasajero";
							break;
						default:	
							echo "Sin Información";
							break;	
					}?>
           <br />              
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="<?php echo base_url() ?>buses">Buses</a></li>
                <li><a href="<?php echo base_url() ?>recorridos">Recorridos</a></li>
                <li><a href="<?php echo base_url() ?>usuarios">Usuarios</a></li>
                <li><a href="<?php echo base_url() ?>ingresos/cerrar_sesion">Cerrar</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>