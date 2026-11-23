<?php

class Producto{
    private $pdo;

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function Cantidad(){
        try {
            $sql = "SELECT SUM(cantidad) as cantidad from productos";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e){
            die($e->getMessage());
            //die acaba el programa en esa linea e imprime el mensaje que tenga dentro
        }
    }

     public function TotalProductos(){
        try {
            $sql = "SELECT SUM(cantidad*precio) as total_productos from productos";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e){
            die($e->getMessage());
        
        }
    }
    

    public function TraerProductos(){
        try{
            $sql = "SELECT * FROM Productos";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    
    public function Insertar($datosProducto){
        try {

        $datos = array(
            $datosProducto['nombre'],
            $datosProducto['marca'],
            $datosProducto['precio'],
            $datosProducto['costo'],
            $datosProducto['cantidad'],
            $datosProducto['imagen'],
        );
            $sql = "INSERT INTO productos(nombre,marca,precio,costo,cantidad,imagen) values(?,?,?,?,?,?)";
            return $this->pdo->prepare($sql)->execute($datos);
        } catch (Exception $e){
            die("No pudo insertar: ".$e->getMessage());
        }
    }

    public function Actualizar($datosProducto){
        $datos = array(
            $datosProducto['nombre'],
            $datosProducto['marca'],
            $datosProducto['precio'],
            $datosProducto['costo'],
            $datosProducto['cantidad'],
            $datosProducto['imagen'],
            $datosProducto['id']

        );
        try {
            $sql = "UPDATE productos SET
            nombre = ?,
            marca = ?,
            precio = ?,
            costo = ?,
            cantidad = ?,
            imagen =?,
            WHERE id = ?;

        ";

            return $this->pdo->prepare($sql)->execute($datos);
        } catch (Exception $e){
            die("No pudo insertar: ".$e->getMessage());
        }
    }

    public function Eliminar($id){
        try{
            $sql = "DELETE FROM productos WHERE id =?";
            $this->pdo->prepare($sql)->execute(array($id));
        } catch (Exception $e){
            die("No pudo borrar: ".$e->getMessage());
        }
    }

    public function TraerPorId($id){
        try{
            $sql = "SELECT * FROM productos where id=?";
            $consulta = this ->pdo->prepare($sql);
            $consulta->execute(array($id));
            return $consulta-> fetch(PDO::FETCH_OBJ);
         } catch (Exception $e){
            die("No pudo borrar: ".$e->getMessage());
        }
    }
    

}