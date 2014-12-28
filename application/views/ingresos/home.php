       <h3 class="muted">Sistema Unabus</h3>  
       <div class="masthead">        
           <h4> Bienvenido/a <?php echo $nombre ?> <?php echo $apellido ?></h4>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Perfil <?php echo $descripcion;?></h4>
                        </div>
                        <div class="panel-body">
                            <p>
                                  <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <i class="fa fa-users fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">Usuarios</div>
                                                        <div>Gestión de Usuarios</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <div class="panel-footer">
                                                    <span class="pull-left"><a href="<?php echo base_url() ?>usuarios">Ingresar</a></span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="panel panel-yellow">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <i class="fa fa-globe fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">Recorridos</div>
                                                        <div>Gestión de Recorridos</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <div class="panel-footer">
                                                    <span class="pull-left"><a href="<?php echo base_url() ?>recorridos">Ingresar</a></span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <i class="fa fa-truck fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">Buses</div>
                                                        <div>Gestión de Buses</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <div class="panel-footer">
                                                    <span class="pull-left"><a href="<?php echo base_url() ?>buses">Ingresar</a></span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                              <!--------------------- -->  
                            </p>
                        </div>
                        <div class="panel-footer">
                            <h4><a href="<?php echo base_url() ?>ingresos/cerrar_sesion">Salir del Sistema</a></h4>
                        </div>
                    </div>
                </div>




       