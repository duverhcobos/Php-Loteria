<?php include("views/templates/header.php"); ?>

<div class="container-fluid">
    <div class="container cardBox">
        <div class="card2">
            
            <?php 
            
            
                $titulo= json_decode($data['titulo'], true);
                $valorPremio= json_decode($data['valorPremio'], true);
            
            
            
            ?>

            
            <div class="imgBox2">
                        <img src="<?php echo servidorBackend.$data['imgProducto'] ?>">
                    </div>
                    <div class="details">
                        <div class="title">
                            <h3><?php echo $titulo['texto'] ?></h3>
                            <p><?php echo $data['nombre']." ".$data['apellido'] ?></p>
                        </div>
                        <div class="description">
                            <h4>Descripcion</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas iure ullam, magnam adipisci quasi sed harum quae ab atque, praesentium sint incidunt quod dicta delectus nam explicabo doloribus voluptates eius.</p>
                        </div>
                        <div class="serieBalota">
                            <h4>Serie: <span class="serie"><?php echo $data['serie'] ?></span></h4>
                            <h4>Balota: <span class="balota"><?php echo $data['numeroBalota'] ?></span></h4>
                        </div>
                        <div class="valorBtn">
                            <div class="valor">
                                <h4>Valor Premio: </h4>
                                <span>$<?php echo $valorPremio['valor'] ?></span>
                            </div>
                            <div class="verProductos">
                                <a href="#">Ver Ganadores</a>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>


<?php include("views/templates/footer.php"); ?>
