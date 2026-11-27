<?php
require_once "modelos/Marca.php";

class MarcaControlador{

    private $marca;

    public function __construct()
    {
        $this->modelo = new Marca();
    }

    public function MostrarMarcas(){
        $marcas = $this->modelo->TraerMarcas();
        require "vistas/plantilla/encabezado.php";
        require "vistas/marcas/listadoMarcas.php";
        require "vistas/plantilla/pie.php";
    }

    

}