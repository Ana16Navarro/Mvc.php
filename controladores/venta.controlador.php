<?php
require_once "modelos/Venta.php";

class VentaControlador{
    public $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Venta();
    }

    public function MostrarTodo(){
        $ventas = $this->modelo->TraerTodo();
        require "vistas/plantilla/encabezado.php";
        require "vistas/ventas/listadoVentas.php";
        require "vistas/plantilla/pie.php";
    }

    public function Formulario(){
        require "vistas/plantilla/encabezado.php";
        require "vistas/ventas/formulario.php";
        require "vistas/plantilla/pie.php";
    }

}