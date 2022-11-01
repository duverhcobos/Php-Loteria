<?php

class ganadoresModel  extends query{

    public function __construct(){
        parent::__construct();
    }
    public function mdlEstiloHome(string $tabla ){
        $sql = "SELECT * FROM $tabla";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function mdlganadores(string $ganadores, string $jugadores, string $productos, $base, $tope){

        if($base != null || $tope != null){

            $sql = "SELECT g.idGanador, j.nombre, j.apellido, p.imgProducto FROM $ganadores g inner join $jugadores j inner join $productos p where g.idGanador=j.id and j.idProducto=p.id order by g.id desc limit $base, $tope";
            $data = $this->selectAll($sql);
            
        }else{
            
            $sql = "SELECT g.idGanador, j.nombre, j.apellido, p.imgProducto FROM $ganadores g inner join $jugadores j inner join $productos p where g.idGanador=j.id and j.idProducto=p.id order by g.id desc ";
            $data = $this->selectAll($sql);
        }
        return $data;
    }



}