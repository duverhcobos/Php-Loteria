/*=============================================
ENLACES PAGINACIÓN
=============================================*/

var url = window.location.href;

var indice = url.split("/");

console.log("indice", indice);

var pagActual = indice[7];
console.log("pagActual", pagActual);

if(isNaN(pagActual)){

	$("#item1").addClass("active");

}else{
	
	$("#item"+pagActual).addClass("active");	
}