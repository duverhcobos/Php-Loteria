<?php include("views/templates/header.php"); ?>

<div class="container-fluid productos">

    <div class="container">


        <!--=====================================
		VITRINA DE PRODUCTOS EN CUADRÍCULA
		======================================-->

        <div class="ganadores">

            <div class="row fWrap">
                <!-- Producto 1 -->

                <?php 
                
                    $ctr = new ganadores();

                    $listaGanadores = $ctr->ctrListarGanadores();

                    foreach ($data as $key => $value){ ?>
                    

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
            <div class="clearfix"></div>
            <center>
                
                <?php

                if(count($listaGanadores) != 0){
                    $pagGanadores = ceil(count($listaGanadores)/12);

                    if($pagGanadores > 4){ 
                        if($data2== 1 ){ ?>

                            <ul class="pagination">

                            <?php

                            for($i=1;$i<=4;$i++){ ?>

                                <li id="item<?php echo $i; ?>"><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $i ?>"><?php echo $i; ?></a></li>
                            <?php } ?>
                                <li class="disabled"><a>...</a></li>
                                <li><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $i ?>"><?php echo $pagGanadores; ?></a></li> 
                                <li><a href="<?php echo servidorCliente ?>ganadores/pag/2"><i class="fa-solid fa-angle-right"></i></a></li>
                            </ul>
                                    
                        <?php }elseif ($data2 != 1 && $data2 != $pagGanadores && $data2 <($pagGanadores/2) && $data2 <($pagGanadores-3 )){ ?>
                             <ul class="pagination">
                             <li><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $data2-1; ?>"><i class="fa-solid fa-angle-left"></i></a></li>

                            <?php

                            for($i=$data2;$i<=($data2+3);$i++){ ?>

                                <li id="item<?php echo $i; ?>"><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $i ?>"><?php echo $i; ?></a></li>
                            <?php } ?>
                                <li class="disabled"><a>...</a></li>
                                <li><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $i ?>"><?php echo $pagGanadores; ?></a></li> 
                                <li><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $numeroPagActual+1; ?>"><i class="fa-solid fa-angle-right"></i></a></li>
                            </ul>
                            
                        <?php }elseif ($data2 != 1 && $data2 != $pagGanadores && $data2 >=($pagGanadores/2) && $data2 <($pagGanadores-3 )){ ?>
                             <ul class="pagination">
                                <li><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $data2-1; ?>"><i class="fa-solid fa-angle-left"></i></a></li>
                                <li><a href="<?php echo servidorCliente ?>ganadores/pag/1">1</a></li>
                                <li class="disabled"><a>...</a></li>

                            <?php

                            for($i=$data2;$i<=($data2+3);$i++){ ?>

                                <li id="item<?php echo $i; ?>"><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $i ?>"><?php echo $i; ?></a></li>
                            <?php } ?> 
                                <li><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $numeroPagActual+1; ?>"><i class="fa-solid fa-angle-right"></i></a></li>
                            </ul>
                            
                        <?php }else{?>

                            <ul class="pagination">
                                <li><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $data2-1; ?>"><i class="fa-solid fa-angle-left"></i></a></li>
                                <li><a href="<?php echo servidorCliente ?>ganadores/pag/1">1</a></li>
                                <li class="disabled"><a>...</a></li>

                            <?php

                            for($i=($pagGanadores-3);$i<=$pagGanadores;$i++){ ?>

                                <li id="item<?php echo $i; ?>"><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $i ?>"><?php echo $i; ?></a></li>
                            <?php } ?>
                            </ul>

                        <?php }
                        
                        }else{ ?>
                        <ul class="pagination">
                            <?php 
                                for($i=1;$i<=$pagGanadores;$i++){ ?>

                                    <li id="item<?php echo $i; ?>"><a href="<?php echo servidorCliente ?>ganadores/pag/<?php echo $i ?>"><?php echo $i; ?></a></li>

                                <?php }
                            
                            ?>
                        </ul>

                    <?php }
                }
                
                
                ?>
            </center>

        </div>

    </div>

</div>

<?php include("views/templates/footer.php"); ?>