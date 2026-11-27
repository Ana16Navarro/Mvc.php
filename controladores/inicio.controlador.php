<?php
require "modelos/Producto.php";
class InicioControlador
{
    public function inicio(){
        $producto = new Producto();
        $resultado = $producto->Cantidad();
        $total = $producto->TotalProductos()->total_productos;
        require "vistas/plantilla/encabezado.php";
        require "vistas/inicio.php";
        require "vistas/plantilla/pie.php";
    }
}
