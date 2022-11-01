<?php

class buscador extends controller
{
    public function index()
    {
		

        
    }

    public function ctrEstiloHome2(){

		$tabla = "plantilla";

		$respuesta = $this->model->mdlEstiloHome($tabla);

		return $respuesta;
	}

	public function ctrListarBuscador($busqueda){

		$ganadores = "ganadores";
		$jugadores = "jugadores";
		$productos = "productos";
		$base = null;
		$tope = null;

		$respuesta = $this->model->mdlBuscador($busqueda, $ganadores, $jugadores, $productos, $base, $tope);

		return $respuesta;
	}


	public function pag($id){


		$ganadores = "ganadores";
		$jugadores = "jugadores";
		$productos = "productos";
		$base = ($id[0]-1)*12;
		$tope = 12;
		$busqueda = $id[1];

		$respuesta = $this->model->mdlBuscador($busqueda, $ganadores, $jugadores, $productos, $base, $tope);

		$this->views->getviews($this, "index", $respuesta, $id[0], $busqueda);
	}


}

?>