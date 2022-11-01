/*=============================================
ANIMACIÓN SLIDER
=============================================*/
var imgProducto = $(".imgProducto");
var titulos1 = $("#slide h1");
var titulos2 = $("#slide .fecha");
var titulos3 = $("#slide .valorPremio");
var btnVerProducto = $("#slide button");

var swiper = new Swiper(".mySwiper", {
  loop: true,
  mousewheel: true,
  autoHeight: true,
  speed: 1000,
  keyboard: {
    enabled: true,
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
    clickable: true,
  },
  on: {
    slideChange: function () {
      var index = this.realIndex;
      console.log(index);
      movimientoSlide(index);
    },
  },
});

function movimientoSlide(item) {

  $(imgProducto[item]).animate({ top: -10 + "%", opacity: 0 }, 0);
  $(titulos1[item]).animate({ top: -10 + "%", opacity: 0 }, 0);
  $(titulos2[item]).animate({ top: -10 + "%", opacity: 0 }, 0);
  $(titulos3[item]).animate({ top: -10 + "%", opacity: 0 }, 0);
  $(btnVerProducto[item]).animate({ top: -10 + "%", opacity: 0 }, 0);

  setTimeout(function () {
    $(imgProducto[item]).animate({ top: 30 + "px", opacity: 1 }, 600);

    $(titulos1[item]).animate({ top: 30 + "px", opacity: 1 }, 600);

    $(titulos2[item]).animate({ top: 30 + "px", opacity: 1 }, 600);

    $(titulos3[item]).animate({ top: 30 + "px", opacity: 1 }, 600);

    $(btnVerProducto[item]).animate({ top: 30 + "px", opacity: 1 }, 600);
  }, 500);
}

/*=============================================
ESCONDER SLIDE
=============================================*/
var toogle = false;

$("#btnSlide").click(function(){

	if(!toogle){

		toogle = true;

		$("#slide").slideUp("fast");

		$("#btnSlide").html('<i class="fa-solid fa-chevron-down"></i>')
	
	}else{

		toogle = false;

		$("#slide").slideDown("fast");

		$("#btnSlide").html('<i class="fa-solid fa-chevron-up"></i>')
	}

})