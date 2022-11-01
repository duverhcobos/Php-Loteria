<?php

class views {
    public function getviews($controlador, $vista, $data="",$data2 ="",$data3 ="") {
        $controlador= get_class($controlador);
        if($controlador == "Home"){
            $vista = "views/".$vista.".php";
        }else {
            $vista = "views/".$controlador."/".$vista.".php";
        }
        require $vista;
    }
}