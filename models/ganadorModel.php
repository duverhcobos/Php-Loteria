<?php

class ganadorModel  extends query{
    public function __construct(){
        parent::__construct();
    }
    

    public function mdlMostrarGanador(string $ganadores, string $jugadores, string $productos, string $id){
        $sql = "SELECT * FROM $ganadores g inner join $jugadores j inner join $productos p where g.idGanador=j.id and j.idProducto=p.id and g.idGanador=$id";
        $data = $this->select($sql);
        return $data;
    }


}