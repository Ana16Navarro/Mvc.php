<?php

require_once "modelos/Producto.php";
class ProductoControlador{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Producto();
    }

    public function MostrarTodo(){
        $productos = $this ->modelo->TraerProductos();
        require "vistas/plantilla/encabezado.php";
        require "vistas/productos/listado.php";
        require "vistas/plantilla/pie.php";

    }

    public function Formulario(){
        if(isset($_GET['id'])  && intval($_GET['id'])>0){
            $producto = $this->modelo->TraerPorId($_GET['$id']);
        }else {
            $producto = null;
        }

        require "vistas/productos/formulario.php";
    }

    public function Guardar(){
        if(isset($_POST['id']) && intval($_POST['id'])> 0) {
            $this->modelo->Actualizar($_POST);
        }else{
            $this->modelo->Insertar($_POST);
        }
        header("location:?c=producto&a=mostrartodo");
    }

    public function Borrar(){
        $id = $_GET ['id'];
        $this->modelo->Eliminar($id);
        header("location:?c=producto&a=mostrartodo");
    }

}