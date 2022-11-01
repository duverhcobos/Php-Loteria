<?php

class Home extends controller
{
    public function index()
    {
        $this->views->getviews($this, "index");

        
    }

    public function ctrSlide (){
        $slide = "slide";
		
		$productos="productos";

		$respuesta = $this->model->mdlSlide($slide, $productos);

		return $respuesta;
    }

    public function ctrEstiloHome(){

		$tabla = "plantilla";

		$respuesta = $this->model->mdlEstiloHome($tabla);

		echo json_encode($respuesta);
	}
    public function ctrEstiloHome2(){

		$tabla = "plantilla";

		$respuesta = $this->model->mdlEstiloHome($tabla);

		return $respuesta;
	}

	public function ctrganadores(){

		$ganadores = "ganadores";
		$jugadores = "jugadores";
		$productos = "productos";

		$respuesta = $this->model->mdlganadores($ganadores, $jugadores, $productos);

		return $respuesta;
	}


}

?>