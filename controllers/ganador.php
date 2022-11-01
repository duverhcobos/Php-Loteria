<?php

class ganador extends controller
{
    public function index()
    {
        $this->views->getviews($this, "index");

        
    }
    

    public function infoGanador(array $id){
        
        $ganadores = "ganadores";
		$jugadores = "jugadores";
		$productos = "productos";

        $item=$id[0];

        $data = $this->model->mdlMostrarGanador($ganadores, $jugadores, $productos, $item);

        $this->views->getviews($this, "index", $data);
    }


}

?>