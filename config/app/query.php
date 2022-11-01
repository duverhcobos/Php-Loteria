<?php

class query extends conexion { 
    private $pdo, $con, $sql, $datos;
    public function __construct(){
        $this->pdo= new conexion();
        $this->con = $this->pdo->conect();
    }

    public function select(string $sql){
        $this->sql=$sql;
        $resul=$this->con->prepare($this->sql);
        $resul->execute();
        $data=$resul->fetch(PDO::FETCH_ASSOC); 
        return $data;
    }
    public function selectAll(string $sql){
        $this->sql=$sql;
        $resul=$this->con->prepare($this->sql);
        $resul->execute();
        $data=$resul->fetchAll(PDO::FETCH_ASSOC); 
        return $data;
    }
}