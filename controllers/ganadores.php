<?php

class ganadores extends controller
{
    public function index()
    {
		$ganadores = "ganadores";
		$jugadores = "jugadores";
		$productos = "productos";
		$base = 0;
		$tope = 12;
		$pag=1;

		$respuesta = $this->model->mdlganadores($ganadores, $jugadores, $productos, $base, $tope);

        $this->views->getviews($this, "index", $respuesta, $pag);

        
    }

    public function ctrEstiloHome2(){

		$tabla = "plantilla";

		$respuesta = $this->model->mdlEstiloHome($tabla);

		return $respuesta;
	}

    public function ctrListarGanadores(){

		$ganadores = "ganadores";
		$jugadores = "jugadores";
		$productos = "productos";
		$base = null;
		$tope = null;

		$respuesta = $this->model->mdlganadores($ganadores, $jugadores, $productos, $base, $tope);

		return $respuesta;
	}

	public function pag($id){


		$ganadores = "ganadores";
		$jugadores = "jugadores";
		$productos = "productos";
		$base = ($id[0]-1)*12;
		$tope = 12;

		$respuesta = $this->model->mdlganadores($ganadores, $jugadores, $productos, $base, $tope);

		$this->views->getviews($this, "index", $respuesta, $id[0]);
	}


}

?>