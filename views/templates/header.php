<?php

class estiloHomeModel extends conexion{
    private $pdo, $con, $sql;
    public function __construct(){
        $this->pdo= new conexion();
        $this->con = $this->pdo->conect();
    }


    public function mdlEstiloHome(string $tabla){
        $sql = "SELECT * FROM $tabla";
        $data = $this->selectAll($sql);
        return $data;
    }

	public function selectAll(string $sql){
        $this->sql=$sql;
        $resul=$this->con->prepare($this->sql);
        $resul->execute();
        $data=$resul->fetchAll(PDO::FETCH_ASSOC); 
        return $data;
    }


}
class estiloHome{
    
    public function ctrEstiloHome2(){

		$mdl= new estiloHomeModel();

		$tabla = "plantilla";

		$respuesta =$mdl->mdlEstiloHome($tabla);

		return $respuesta;
	}
}

$ctr = new estiloHome();
$social = $ctr->ctrEstiloHome2();




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Tienda Virtual">

	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dignissimos corporis iste, neque iure animi quos similique dolorum delectus placeat repudiandae consectetur! Voluptate dicta repellat quod eligendi dolores accusantium.">

	<meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, Eligendi soluta dignissimos corporis iste, neque iure animi quos similique dolorum delectus placeat repudiandae consectetur! Voluptate dicta repellat quod eligendi dolores accusantium.">

	<title>Tienda Virtual</title>

    <link rel="shortcut icon" href="<?php echo servidorBackend."vistas/img/plantilla/icono.png"; ?>" type="image/x-icon">

    <!--=====================================
	PLUGINS DE CSS
	======================================-->
	
	
	<link rel="stylesheet" href="<?php echo servidorCliente; ?>assets/css/plugins/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo servidorCliente; ?>assets/css/plugins/swiper-bundle.min.css">
	
	<link rel="stylesheet" href="<?php echo servidorCliente; ?>assets/css/plugins/fontawesome.min.css">

    

    <!--=====================================
	HOJAS DE ESTILO PERSONALIZADAS
	======================================-->

	<link rel="stylesheet" href="<?php echo servidorCliente; ?>assets/css/header.css">
	<link rel="stylesheet" href="<?php echo servidorCliente; ?>assets/css/slide.css">
	<link rel="stylesheet" href="<?php echo servidorCliente; ?>assets/css/ganadores.css">
	<link rel="stylesheet" href="<?php echo servidorCliente; ?>assets/css/infoGanador.css">
    <!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->

	<script src="<?php echo servidorCliente; ?>assets/js/plugins/fontawesome.min.js"></script>

    <script src="<?php echo servidorCliente; ?>assets/js/plugins/jquery.min.js"></script>


    <script src="<?php echo servidorCliente; ?>assets/js/plugins/bootstrap.min.js"></script>

    <script src="<?php echo servidorCliente; ?>assets/js/plugins/swiper-bundle.min.js"></script>

    
	
</head>
<body>

<style>
	:root {
  		--color-principal: <?php echo $social[0]['barraSuperior']; ?> ;
  		--color-secundario: <?php echo $social[0]['colorFondo']; ?> ;
		--color-botones: <?php echo $social[0]['colorFondo']; ?>;
		--color-texto-principal: <?php echo $social[0]['colorTexto']; ?>;
		--color-texto-secundario: <?php echo $social[0]['textoSuperior']; ?>;
		--color-texto-card: <?php echo $social[0]['textoSuperior']; ?>;
		--color-bg-cardInfoGanador: <?php echo $social[0]['colorTexto']; ?>;
		
	}
</style>

<div class="container-fluid barraSuperior" id="top">
	
	<div class="container">
		
		<div class="row">
	
			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
				<ul>
					<?php
					$jsonSocial = json_decode($social[0]['redesSociales'], true);
					foreach ($jsonSocial as $key => $value) { ?>
						<li><a href="<?php echo $value['url']; ?>" target="_blank"><i class="<?php echo $value['red'] . " " . "redSocial" . " " . $value['estilo']; ?>"></i></a></li>
					<?php } ?>
				</ul>
			</div>

			<!--=====================================
			REGISTRO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
				
				<ul>
					
					<li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
					<li>|</li>
					<li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>

				</ul>

			</div>	

			<!-- Modal -->
			<div id="modalRegistro" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header text-center modalHeader">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Registrarse</h4>
						</div>
						<div class="modal-body">
							<!--=====================================
							REGISTRO FACEBOOK
							======================================-->
							<div class="col-sm-6 col-xs-12 facebook" id="btnFacebookRegistro">
								<p>
									<i class="fa fa-facebook"></i>
									Registrarse con facebook
								</p>

							</div>
							
							
							
							<!--=====================================
							REGISTRO GOOGLE
							======================================-->
							<div class="col-sm-6 col-xs-12 google" id="btnGoogleRegistro">
								<p>
									<i class="fa fa-google"></i>
									Registrarse con google
								</p>

							</div>
							<!--=====================================
							REGISTRO DIRECTO
							======================================-->
							<form method="post" onsubmit="return registroUsuario()">
								
								<hr>

								<div class="form-group">
						
									<div class="input-group">
										
										<span class="input-group-addon">
											
											<i class="fa-solid fa-user"></i>
										
										</span>

										<input type="text" class="form-control text-uppercase" id="regUsuario" name="regUsuario" placeholder="Nombre Completo" required>

									</div>

								</div>

								<div class="form-group">
									
									<div class="input-group">
										
										<span class="input-group-addon">
											
											<i class="fa-solid fa-envelope"></i>
										
										</span>

										<input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Correo Electrónico" required>

									</div>

								</div>

								<div class="form-group">
									
									<div class="input-group">
										
										<span class="input-group-addon">
											
											<i class="fa-solid fa-key"></i>
										
										</span>

										<input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Contraseña" required>

									</div>

								</div>

								<a href="https://www.iubenda.com/privacy-policy/82604344" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Política de Privacidad ">Política de Privacidad</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
							
							</form>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>

		</div>	

	</div>

</div>

<!--=====================================
HEADER
======================================-->

<header class="container-fluid">
	
	<div class="container">
		
		<div class="row" id="cabezote">

			<!--=====================================
			LOGOTIPO
			======================================-->
			
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
				
				<a href="#">
						
					<img src="<?php echo servidorBackend.$social[0]['logo']; ?>" class="img-responsive">

				</a>
				
			</div>

			<!--=====================================
			BLOQUE CATEGORÍAS Y BUSCADOR
			======================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
					
				<!--=====================================
				BOTÓN CATEGORÍAS
				======================================-->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
					
					<p>CATEGORÍAS
					
						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
					
					</p>

				</div>

				<!--=====================================
				BUSCADOR
				======================================-->
				
				<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
					
					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">	

					<span class="input-group-btn">
						
						<a href="<?php echo servidorCliente."buscador/pag/1" ?>">

							<button class="btn btn-default backColor" type="submit">
								
								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>
			
			</div>

			<!--=====================================
			CARRITO DE COMPRAS
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
				
				<a href="#">

					<button class="btn btn-default pull-left backColor"> 
						
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					
					</button>
				
				</a>	

				<p>TU CESTA <span class="cantidadCesta">3</span> <br> USD $ <span class="sumaCesta">20</span></p>	

			</div>

		</div>


	</div>

</header>