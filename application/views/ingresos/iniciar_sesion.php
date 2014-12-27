<h1> Iniciar sesión </h1>
	<?php if ($error): ?>
       <p> <?php echo $error ?> </p>
    <?php endif; ?>

    <form method="post" action="<?php echo base_url() ?>ingresos/iniciar_sesion_post" >
       <label> Rut </label>
       <br />
       <input type="text" name="rut" />
       <br />
       <label> Contraseña </label>
       <br />
       <input type="password" name="contrasena" />
       <br />
       <input type="submit" value="Iniciar sesión" />
    </form>
 