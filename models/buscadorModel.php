<?php

class buscadorModel  extends query{

    public function __construct(){
        parent::__construct();
    }
    public function mdlEstiloHome(string $tabla ){
        $sql = "SELECT * FROM $tabla";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function mdlBuscador(string $busqueda, string $ganadores, string $jugadores, string $productos, $base, $tope){
        if($base != null || $tope != null){

            $sql = "SELECT * FROM $ganadores g inner join $jugadores j inner join $productos p where g.idGanador=j.id and j.idProducto=p.id and (j.nombre LIKE '%$busqueda%' or j.apellido LIKE '%$busqueda%' or j.numeroBalota LIKE '%$busqueda%' or j.serie LIKE '%$busqueda%' or p.titulo LIKE '%$busqueda%') order by g.id desc limit $base, $tope";
            $data = $this->selectAll($sql); 
            
            
        }else{
            
            $sql = "SELECT * FROM $ganadores g inner join $jugadores j inner join $productos p where g.idGanador=j.id and j.idProducto=p.id and (j.nombre LIKE '%$busqueda%' or j.apellido LIKE '%$busqueda%' or j.numeroBalota LIKE '%$busqueda%' or j.serie LIKE '%$busqueda%' or p.titulo LIKE '%$busqueda%') order by g.id desc";
            $data = $this->selectAll($sql); 
        }
           return $data;
    }



}