<!--=====================================
SLIDESHOW  
======================================-->

<div class="container-fluid swiper mySwiper" id="slide">



  <!--=====================================
        DIAPOSITIVAS
        ======================================-->

  <div class="swiper-wrapper sliderBox">

    <!-- SLIDE  -->
    <?php

	$ctr=new Home();
    $slide = $ctr->ctrSlide();

	
    foreach ($slide as $key => $value) { ?>

      <?php

      $indice = $key + 1;

      $estiloImgProducto = json_decode($value['estiloImgProducto'], true);
      $estiloTextoSlide = json_decode($value['estiloTextoSlide'], true);
      $titulo1 = json_decode($value['titulo'], true);
      $valorPremio = json_decode($value['valorPremio'], true);

      if (!empty($value['imgProducto'])) {
        $imgProducto = servidorBackend . $value['imgProducto'];
      } else {
        $imgProducto = $value['imgProducto'];
      }

      ?>



      <!-- SLIDE 1 -->

      <div item="<?php echo $indice; ?>" class="swiper-slide sliderContent">

        <img src="<?php echo servidorBackend.$value['imgFondo']; ?>">

        <div class="slideOpciones <?php echo $value['tipoSlide']; ?>">

          <img class="imgProducto" src="<?php echo $imgProducto ?>" style="top:<?php echo $estiloImgProducto['top']; ?>;  right:<?php echo $estiloImgProducto['right']; ?>; width:<?php echo $estiloImgProducto['width']; ?>; left:<?php echo $estiloImgProducto['left']; ?>">

          <div class="textosSlide" style="top:<?php echo $estiloTextoSlide['top']; ?>; left:<?php echo $estiloTextoSlide['left']; ?>; right:<?php echo $estiloTextoSlide['right']; ?>; width:<?php echo $estiloTextoSlide['width']; ?>">

            <h1 style="color:#<?php echo $titulo1['color']; ?>"><?php echo $titulo1['texto']; ?></h1>

            <p class="fecha" style="color:#<?php echo $valorPremio['color']; ?>">Juega el dia: <span><?php echo $value['fechaFinal']; ?></span></p>

            <p class="valorPremio" style="color:#<?php echo $valorPremio['color']; ?>">Valor Premio: <span>$<?php echo $valorPremio['valor']; ?></span></p>

            <a href="<?php echo $value['url']; ?>">

              <?php echo $value['botonVerProducto']; ?>

            </a>

          </div>

        </div>

      </div>

    <?php } ?>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>


</div>

<center>

  <button id="btnSlide" class="backColor">

  <i class="fa-solid fa-chevron-up"></i>

  </button>

</center>
