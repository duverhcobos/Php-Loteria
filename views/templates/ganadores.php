<div class="container-fluid productos">

    <div class="container">

        <div class="row">

            <!--=====================================
			BARRA TÍTULO
			======================================-->

            <div class="col-xs-12 tituloDestacado">

                <!--===============================================-->

                <div class="col-sm-6 col-xs-12">

                    <h1><small>GANADORES </small></h1>

                </div>

                <!--===============================================-->

                <div class="col-sm-6 col-xs-12">

                    <a href="ganadores">

                        <button class="btn btn-default backColor pull-right">

                            VER MÁS <span class="fa fa-chevron-right"></span>

                        </button>

                    </a>

                </div>

                <!--===============================================-->

            </div>

            <div class="clearfix"></div>

            <hr>

        </div>

        <!--=====================================
		VITRINA DE PRODUCTOS EN CUADRÍCULA
		======================================-->

        <div class="ganadores">

            <div class="row fWrap">
                <!-- Producto 1 -->

                <?php 
                
                    $ctr = new Home();

                    $ganadores = $ctr->ctrganadores();

                    foreach ($ganadores as $key => $value){ ?>

                        <div class="col-md-2 col-sm-6 col-xs-12 card">
                            <div class="imgBox">
                                <img src="<?php echo servidorBackend.$value['imgProducto'] ?>">
                            </div>
                            <div class="contentBox">
                                <h3><?php echo $value['nombre']." ".$value['apellido'] ?></h3>
                                <a href="ganador/infoGanador/<?php echo $value['idGanador'] ?>" class="botonVer">Ver</a>
                            </div>
                        </div>
                    <?php }
                
                
                ?>
                




            </div>

        </div>

    </div>

</div>