<?php

class BasedeDatos{
   const servidor = "localhost";
   const usuario = "postgres";//postgres 
   const clave ="1234";//12345
   const nombrebd="proyectomvc";

   public static function Conectar(){
    try {
        $conexion = new PDO("pgsql:host=".self::servidor.";port=5432;dbname=".self::nombrebd.";user=".self::usuario.";password=".self::clave);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
        return $conexion;
    }catch (PDOException $e){
        return "Esta fallando ".$e->getMessage();
    }

   }
}