
    <?php if ($error): ?>
       <p> 
       <div class="alert alert-danger">
           <?php echo $error ?>
           <a href="#" class="alert-link">Verifique los parámetros y vuelva a intentarlo.</a>.
       </p>
    <?php endif; ?>
    
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login Sistema Unabus</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url() ?>ingresos/iniciar_sesion_post" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Rut" name="rut" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contrasena" name="contrasena" type="password" value="">
                                </div>
                                 <input type="submit" value="Iniciar sesión" class="btn btn-lg btn-success btn-block" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>