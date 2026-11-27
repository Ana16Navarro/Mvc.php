<?php

class Venta{
    private $pdo;

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos :: Conectar();
    }

    public function  TraerTodo(){
        try{
            $sql = "SELECT * FROM ventas";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }
}