<?php

class Marca{
    private $pdo;

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }


    public function TraerMarcas(){
        try{
            $sql = "SELECT * FROM Marcas";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function TraerPorId($id){
        try{
            $sql = "SELECT * FROM Marcas where id=?";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute(array($id));
            return $consulta-> fetch(PDO::FETCH_OBJ);
         } catch (Exception $e){
            die("No pudo borrar: ".$e->getMessage());
        }
    }

    public function Insertar($datosProducto, $imagen ){
        try {

        $datos = array(
            $datosProducto['nombre'],
            $datosProducto['marca'],
            $datosProducto['precio'],
            $datosProducto['costo'],
            $datosProducto['cantidad'],
            $imagen
        );
            $sql = "INSERT INTO productos(nombre,marca,precio,costo,cantidad,imagen) values(?,?,?,?,?,?)";
            return $this->pdo->prepare($sql)->execute($datos);
        } catch (Exception $e){
            die("No pudo insertar: ".$e->getMessage());
        }
    }
    
    
    
}