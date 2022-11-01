/*=============================================
HOME 
=============================================*/

$.ajax({

	url:"http://localhost/loteria/frontend/Home/ctrEstiloHome",
	success:function(respuesta){

		var estilos = JSON.parse(respuesta);

		var colorFondo = estilos[0].colorFondo
		var colorTexto = estilos[0].colorTexto;
		var barraSuperior = estilos[0].barraSuperior;
		var textoSuperior = estilos[0].textoSuperior;
		$(".backColor, .backColor a").css({"background": colorFondo,
											"color": colorTexto})

		$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior, 
			                                       "color": textoSuperior})
		
		
										

	}


})

