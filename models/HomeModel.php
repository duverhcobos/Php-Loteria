<?php

class HomeModel  extends query{

    public function __construct(){
        parent::__construct();
    }

    public function mdlSlide(string $slide, string $productos ){
        $sql = "SELECT s.*, p.* FROM $slide s inner join $productos p where s.idProducto=p.id";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function mdlEstiloHome(string $tabla ){
        $sql = "SELECT * FROM $tabla";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function mdlganadores(string $ganadores, string $jugadores, string $productos){
        $sql = "SELECT g.idGanador, j.nombre, j.apellido, p.imgProducto FROM $ganadores g inner join $jugadores j inner join $productos p where g.idGanador=j.id and j.idProducto=p.id order by g.id asc limit 4";
        $data = $this->selectAll($sql);
        return $data;
    }



}